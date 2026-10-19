<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\Database\Seeders\RolePermissionSeeder;

class DemoSeeder extends Seeder
{
    public function run(): void
    {
        if (! config('demo.enabled')) {
            throw new \RuntimeException('Demo seeding requires DEMO_MODE=true. Never enable it for a customer application.');
        }

        $this->call([
            RolePermissionSeeder::class,
            UserSeeder::class,
            SettingSeeder::class,
            BlogSeeder::class,
        ]);
    }
}
