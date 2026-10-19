# Installation

## Install

Requires PHP 8.3+ with Laravel/Filament extensions and Composer 2. The project release series starts at 1.0; 0.x releases are the previous vendor-installed library.

```bash
composer create-project programmernomad/laracorekit my-app
cd my-app
php artisan laracorekit:admin
php artisan serve
```

**Cutover status:** use this command after Packagist is connected to this repository and lists the 1.0 project release. Until then, use the GitHub clone instructions below; the existing 0.x library cannot create this application.

Creation scripts generate `.env` and the application key, initialize SQLite, migrate/seed roles and create the storage link. They do not create sample users. Create your administrator interactively (minimum 8-character password). Configure mail and `APP_URL` in `.env` before testing mail delivery or deploying. The default UI ships with built assets.

Open `/`, `/blog`, `/ui-showcase`, `/login` and `/admin`.

## Clone from GitHub

```bash
git clone https://github.com/ProgrammerNomad/LaraCoreKit.git my-app
cd my-app
php -r "copy('.env.example', '.env');"
composer install
php artisan key:generate
php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
php artisan migrate --seed
php artisan storage:link
php artisan laracorekit:admin
php artisan serve
```

For MySQL, configure an existing database in `.env` instead of creating SQLite. `php artisan serve` is for local development.


## Customization

All starter PHP modules belong to your application under `modules/`. Edit them directly; there is no `vendor/programmernomad/laracorekit` runtime dependency. Edit the homepage and shared layout under `resources/views`. Component examples live in `modules/UIShowcase/views`. Rebuild assets after changing Tailwind classes or JavaScript.
