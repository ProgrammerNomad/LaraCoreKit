<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\Database\Seeders\RolePermissionSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Safe defaults: roles only. Demo content requires an explicit DemoSeeder invocation.
        $this->call(RolePermissionSeeder::class);
        if (config('demo.enabled')) {
            $this->call(DemoSeeder::class);
        }
    }
}
