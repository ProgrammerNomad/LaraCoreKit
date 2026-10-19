<?php

namespace LaraCoreKit\Core\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Modules\User\Database\Seeders\RolePermissionSeeder;
use Modules\User\Models\User;

class MakeAdminCommand extends Command
{
    protected $signature = 'laracorekit:admin';

    protected $description = 'Create a new administrator using an interactive, hidden password prompt';

    public function handle(): int
    {
        if (! $this->input->isInteractive()) {
            $this->error('Administrator creation requires interactive input.');

            return self::FAILURE;
        }

        $data = [
            'name' => $this->ask('Name'),
            'email' => $this->ask('Email'),
            'password' => $this->secret('Password (at least 12 characters)'),
        ];
        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', Password::min(12)],
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }

            return self::FAILURE;
        }

        DB::transaction(function () use ($data): void {
            (new RolePermissionSeeder)->run();
            $user = User::create($data);
            $user->assignRole('Admin');
        });
        $this->info('Administrator created. Sign in at /'.config('laracorekit.panel.path').'/login.');

        return self::SUCCESS;
    }
}
