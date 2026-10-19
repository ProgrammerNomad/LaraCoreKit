<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\User\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        if (! config('demo.enabled')) {
            throw new \RuntimeException('Sample users may only be seeded in explicit demo mode.');
        }
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
        if (class_exists(Role::class)) {
            $adminRole = Role::where('name', 'Admin')->first();
            if ($adminRole && ! $admin->hasRole('Admin')) {
                $admin->assignRole('Admin');
            }
        }

        // Create editor user
        $editor = User::firstOrCreate(
            ['email' => 'editor@laracorekit.com'],
            [
                'name' => 'Editor User',
                'password' => Hash::make(config('demo.credentials.admin.password', 'Admin@123')),
                'email_verified_at' => now(),
            ]
        );

        if (class_exists(Role::class)) {
            $editorRole = Role::where('name', 'Editor')->first();
            if ($editorRole && ! $editor->hasRole('Editor')) {
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

        if (class_exists(Role::class)) {
            $userRole = Role::where('name', 'User')->first();
            if ($userRole && ! $user->hasRole('User')) {
                $user->assignRole('User');
            }
        }
    }
}
