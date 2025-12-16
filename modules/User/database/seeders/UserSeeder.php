<?php

namespace Modules\User\Database\Seeders;

use Modules\User\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        $admin = User::firstOrCreate(
            ['email' => config('demo.credentials.admin.email', 'admin@laracorekit.com')],
            [
                'name' => 'Admin User',
                'password' => Hash::make(config('demo.credentials.admin.password', 'password')),
                'email_verified_at' => now(),
            ]
        );

        // Assign Admin role if it exists
        if (class_exists(\Spatie\Permission\Models\Role::class)) {
            $adminRole = \Spatie\Permission\Models\Role::where('name', 'Admin')->first();
            if ($adminRole && !$admin->hasRole('Admin')) {
                $admin->assignRole('Admin');
            }
        }

        // Create editor user
        $editor = User::firstOrCreate(
            ['email' => 'editor@laracorekit.com'],
            [
                'name' => 'Editor User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        if (class_exists(\Spatie\Permission\Models\Role::class)) {
            $editorRole = \Spatie\Permission\Models\Role::where('name', 'Editor')->first();
            if ($editorRole && !$editor->hasRole('Editor')) {
                $editor->assignRole('Editor');
            }
        }

        // Create regular user
        $user = User::firstOrCreate(
            ['email' => config('demo.credentials.user.email', 'user@laracorekit.com')],
            [
                'name' => 'Demo User',
                'password' => Hash::make(config('demo.credentials.user.password', 'password')),
                'email_verified_at' => now(),
            ]
        );

        if (class_exists(\Spatie\Permission\Models\Role::class)) {
            $userRole = \Spatie\Permission\Models\Role::where('name', 'User')->first();
            if ($userRole && !$user->hasRole('User')) {
                $user->assignRole('User');
            }
        }
    }
}
