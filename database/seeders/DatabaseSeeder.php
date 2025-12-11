<?php

namespace Database\Seeders;

use Modules\User\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            \Modules\User\Database\Seeders\RolePermissionSeeder::class,
            \Modules\User\Database\Seeders\UserSeeder::class,
            \Modules\Settings\Database\Seeders\SettingSeeder::class,
            \Modules\Blog\Database\Seeders\BlogSeeder::class,
        ]);
    }
}
