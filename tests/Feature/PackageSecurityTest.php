<?php

namespace Tests\Feature;

use Database\Seeders\DemoSeeder;
use Filament\Facades\Filament;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Storage;
use LaraCoreKit\Core\Filament\LocalAvatarProvider;
use Livewire\Livewire;
use Modules\Auth\Http\Livewire\ForgotPassword;
use Modules\Auth\Http\Livewire\Login;
use Modules\Auth\Http\Livewire\Register;
use Modules\Blog\Models\Blog;
use Modules\Settings\Filament\Pages\Settings;
use Modules\User\Database\Seeders\RolePermissionSeeder;
use Modules\User\Filament\Resources\Roles\RoleResource;
use Modules\User\Filament\Resources\UserResource;
use Modules\User\Models\User;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class PackageSecurityTest extends TestCase
{
    use RefreshDatabase;

    public function test_default_seeding_creates_roles_without_sample_users(): void
    {
        $this->seed();
        $this->assertDatabaseCount('users', 0);
        $this->assertDatabaseHas('roles', ['name' => 'Admin']);
    }

    public function test_default_avatar_is_local_and_escapes_user_controlled_text(): void
    {
        $user = User::factory()->make(['name' => '<script> Example']);
        $url = (new LocalAvatarProvider)->get($user);
        $this->assertStringStartsWith('data:image/svg+xml;base64,', $url);
        $svg = base64_decode(substr($url, strlen('data:image/svg+xml;base64,')));
        $this->assertStringNotContainsString('<script>', $svg);
        $this->assertStringContainsString('&lt;', $svg);
    }

    public function test_administrator_command_creates_a_unique_account_with_a_hashed_password(): void
    {
        $this->artisan('laracorekit:admin')
            ->expectsQuestion('Name', 'Maintainer')
            ->expectsQuestion('Email', 'maintainer@example.test')
            ->expectsQuestion('Password (at least 8 characters)', 'a-long-unique-test-password')
            ->assertSuccessful();
        $user = User::where('email', 'maintainer@example.test')->firstOrFail();
        $this->assertTrue($user->hasRole('Admin'));
        $this->assertTrue(Hash::check('a-long-unique-test-password', $user->password));
    }

    public function test_administrator_can_retry_invalid_passwords_and_use_eight_characters(): void
    {
        $this->artisan('laracorekit:admin')
            ->expectsQuestion('Name', 'Maintainer')
            ->expectsQuestion('Email', 'retry@example.test')
            ->expectsQuestion('Password (at least 8 characters)', '')
            ->expectsOutput('The password field is required.')
            ->expectsQuestion('Password (at least 8 characters)', 'short77')
            ->expectsOutput('The password field must be at least 8 characters.')
            ->expectsQuestion('Password (at least 8 characters)', 'Eight!42')
            ->assertSuccessful();

        $this->assertDatabaseCount('users', 1);
        $user = User::where('email', 'retry@example.test')->firstOrFail();
        $this->assertTrue($user->hasRole('Admin'));
        $this->assertTrue(Hash::check('Eight!42', $user->password));
    }

    public function test_administrator_creation_rejects_noninteractive_input(): void
    {
        $this->artisan('laracorekit:admin', ['--no-interaction' => true])->assertFailed();
        $this->assertDatabaseCount('users', 0);
    }

    public function test_administrator_command_cannot_promote_an_existing_account(): void
    {
        $user = User::factory()->create(['email' => 'existing@example.test']);
        $this->artisan('laracorekit:admin')
            ->expectsQuestion('Name', 'Maintainer')
            ->expectsQuestion('Email', $user->email)
            ->assertFailed();
        $this->assertFalse($user->fresh()->hasRole('Admin'));
    }

    public function test_sample_seeder_refuses_to_run_outside_demo_mode(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->seed(DemoSeeder::class);
    }

    public function test_role_seeding_does_not_promote_accounts_with_a_known_email(): void
    {
        $user = User::factory()->create(['email' => 'admin@laracorekit.com']);
        $this->seed(RolePermissionSeeder::class);
        $this->assertFalse($user->fresh()->hasRole('Admin'));
    }

    public function test_login_blocks_valid_credentials_after_repeated_failures(): void
    {
        $user = User::factory()->create(['password' => 'a-valid-test-password']);
        $component = Livewire::test(Login::class)->set('email', $user->email)->set('password', 'wrong');
        for ($i = 0; $i < 5; $i++) {
            $component->call('login')->assertHasErrors('email');
        }
        $component->set('password', 'a-valid-test-password')->call('login')->assertHasErrors('email');
        $this->assertGuest();
    }

    public function test_successful_login_clears_the_account_attempt_counter(): void
    {
        $user = User::factory()->create(['password' => 'a-valid-test-password']);
        $key = 'laracorekit:login:'.hash('sha256', strtolower($user->email).'|127.0.0.1');
        RateLimiter::hit($key, 60);
        Livewire::test(Login::class)->set('email', $user->email)->set('password', 'a-valid-test-password')
            ->call('login')->assertRedirect(route('dashboard'));
        $this->assertAuthenticatedAs($user);
        $this->assertSame(0, RateLimiter::attempts($key));
    }

    public function test_disabled_registration_cannot_be_invoked_as_a_livewire_action(): void
    {
        config(['laracorekit.registration' => false]);
        Livewire::test(Register::class)->set('name', 'Visitor')->set('email', 'visitor@example.test')
            ->set('password', 'long-test-password')->set('password_confirmation', 'long-test-password')
            ->call('register')->assertForbidden();
        $this->assertDatabaseCount('users', 0);
    }

    public function test_regular_user_cannot_access_the_admin_panel(): void
    {
        $user = User::factory()->create();
        $this->assertFalse($user->canAccessPanel(Filament::getPanel('admin')));
        $this->actingAs($user)->get('/admin')->assertForbidden();
    }

    public function test_publication_scope_excludes_drafts_and_future_posts(): void
    {
        $user = User::factory()->create();
        foreach ([['draft', now()->subDay()], ['published', now()->addDay()], ['published', now()->subDay()]] as $i => [$status, $date]) {
            Blog::create(['author_id' => $user->id, 'title' => ['en' => 'Post '.$i], 'slug' => 'post-'.$i,
                'content' => ['en' => '<p>Content</p>'], 'status' => $status, 'published_at' => $date]);
        }
        $this->assertSame(['post-2'], Blog::published()->pluck('slug')->all());
        $this->get('/blog/post-0')->assertNotFound();
        $this->get('/blog/post-1')->assertNotFound();
    }

    public function test_editor_cannot_open_individual_user_or_role_records(): void
    {
        $this->seed(RolePermissionSeeder::class);
        $editor = User::factory()->create();
        $editor->assignRole('Editor');
        $record = User::factory()->create();
        $this->actingAs($editor);
        $this->assertFalse(UserResource::canView($record));
        $this->assertFalse(RoleResource::canView(Role::first()));
        $this->get('/admin/users/'.$record->id)->assertForbidden();
    }

    public function test_view_settings_permission_does_not_allow_saving(): void
    {
        $this->seed(RolePermissionSeeder::class);
        $editor = User::factory()->create();
        $editor->assignRole('Editor');
        $editor->givePermissionTo('view-settings');
        $this->actingAs($editor);
        Filament::setCurrentPanel(Filament::getPanel('admin'));
        Livewire::test(Settings::class)->call('save')->assertForbidden();
        $this->assertDatabaseCount('settings', 0);
    }

    public function test_public_post_html_is_sanitized(): void
    {
        $user = User::factory()->create();
        Blog::create(['author_id' => $user->id, 'title' => ['en' => 'Safe post'], 'slug' => 'safe-post',
            'content' => ['en' => '<p>Safe paragraph</p><script>alert("unsafe-marker")</script>'],
            'status' => 'published', 'published_at' => now()->subMinute()]);
        $this->get('/blog/safe-post')->assertOk()->assertSee('Safe paragraph')->assertDontSee('<script>alert("unsafe-marker")</script>', false);
    }

    public function test_reset_link_response_does_not_disclose_account_existence(): void
    {
        Notification::fake();
        $user = User::factory()->create();
        foreach ([$user->email, 'missing@example.test'] as $email) {
            Livewire::test(ForgotPassword::class)
                ->set('email', $email)->call('sendResetLink')->assertHasNoErrors()
                ->assertSet('message', __('If an account exists, a password reset link will be sent.'));
        }
        Notification::assertSentTo($user, ResetPassword::class);
    }

    public function test_reset_link_requests_are_throttled_before_contacting_broker(): void
    {
        RateLimiter::clear('laracorekit:reset:127.0.0.1');
        Password::shouldReceive('sendResetLink')->times(5)->andReturn('passwords.sent');
        for ($i = 0; $i < 6; $i++) {
            Livewire::test(ForgotPassword::class)
                ->set('email', 'visitor@example.test')->call('sendResetLink')->assertHasNoErrors();
        }
    }

    public function test_password_reset_rejects_invalid_tokens_and_consumes_valid_tokens(): void
    {
        $user = User::factory()->create(['password' => 'original-password']);
        $token = Password::createToken($user);
        $form = Livewire::test(\Modules\Auth\Http\Livewire\ResetPassword::class, ['token' => 'invalid-token'])
            ->set('email', $user->email)->set('password', 'replacement-password')
            ->set('password_confirmation', 'replacement-password');
        $form->call('resetPassword')->assertHasErrors('email');
        $this->assertTrue(Hash::check('original-password', $user->fresh()->password));
        $form->set('token', $token)->call('resetPassword')->assertHasNoErrors()->assertRedirect(route('login'));
        $this->assertTrue(Hash::check('replacement-password', $user->fresh()->password));
        $this->assertFalse(Password::tokenExists($user->fresh(), $token));
    }

    public function test_settings_upload_rejects_executable_and_oversized_images(): void
    {
        Storage::fake('public');
        $this->seed(RolePermissionSeeder::class);
        $admin = User::factory()->create();
        $admin->assignRole('Admin');
        $this->actingAs($admin);
        Filament::setCurrentPanel(Filament::getPanel('admin'));
        Livewire::test(Settings::class)
            ->set('data.site_logo', [UploadedFile::fake()->create('shell.php', 1, 'application/x-php')])
            ->call('save')->assertHasErrors('data.site_logo');
        Livewire::test(Settings::class)
            ->set('data.site_logo', [UploadedFile::fake()->image('large.png')->size(2049)])
            ->call('save')->assertHasErrors('data.site_logo');
        $this->assertDatabaseCount('settings', 0);
        $this->assertSame([], Storage::disk('public')->allFiles('settings'));
    }
}
