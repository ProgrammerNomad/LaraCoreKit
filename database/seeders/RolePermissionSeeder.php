<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            'view-users',
            'create-users',
            'edit-users',
            'delete-users',
            'view-roles',
            'create-roles',
            'edit-roles',
            'delete-roles',
            'view-blog',
            'create-blog',
            'edit-blog',
            'delete-blog',
            'publish-blog',
            'view-settings',
            'edit-settings',
            'view-media',
            'upload-media',
            'delete-media',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create roles and assign permissions
        $adminRole = Role::firstOrCreate(['name' => 'Admin']);
        $adminRole->syncPermissions(Permission::all());

        $editorRole = Role::firstOrCreate(['name' => 'Editor']);
        $editorRole->syncPermissions([
            'view-blog',
            'create-blog',
            'edit-blog',
            'publish-blog',
            'view-media',
            'upload-media',
        ]);

        $userRole = Role::firstOrCreate(['name' => 'User']);
        $userRole->syncPermissions(['view-blog']);

        // Assign Admin role to existing admin user
        $admin = User::where('email', 'admin@laracorekit.com')->first();
        if ($admin) {
            $admin->assignRole('Admin');
        }
    }
}
