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
        ];
        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }

            return self::FAILURE;
        }

        $this->info('Choose a unique password of at least 8 characters. Input is hidden; longer passwords are recommended.');
        do {
            $data['password'] = $this->secret('Password (at least 8 characters)');
            $passwordValidator = Validator::make(
                ['password' => $data['password']],
                ['password' => ['required', Password::min(8)]],
            );
            foreach ($passwordValidator->errors()->all() as $error) {
                $this->error($error);
            }
        } while ($passwordValidator->fails());

        DB::transaction(function () use ($data): void {
            (new RolePermissionSeeder)->run();
            $user = User::create($data);
            $user->assignRole('Admin');
        });
        $this->info('Administrator created. Sign in at /'.config('laracorekit.panel.path').'/login.');

        return self::SUCCESS;
    }
}
