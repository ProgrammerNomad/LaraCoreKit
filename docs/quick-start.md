# Quick start

LaraCoreKit is published on Packagist. Choose the core package for your own application, or clone the main GitHub repository to run the website, docs and showcase. Both include public and admin features.

## New application with Composer (recommended)

Requires PHP 8.3+ and Composer 2. First create Laravel; the package does not create the application for you.

```bash
composer create-project laravel/laravel my-app "~13.0"
cd my-app
composer require programmernomad/laracorekit:"~0.1.0"
php artisan laracorekit:install
```

Keep Laravel's generated SQLite database for local evaluation, or configure your database in `.env`. Set `APP_URL=http://127.0.0.1:8000` and configure mail before testing password-reset delivery. Then:

```bash
php artisan migrate
php artisan laracorekit:admin
php artisan storage:link
php artisan serve
```

Visit `/blog`, `/login` and `/admin` at `http://127.0.0.1:8000`. The administrator command prompts for your own credentials. No sample users are created. Your application's `/` route remains yours; the marketing website, docs, showcase and sample content are not installed by the core. Default package assets are prebuilt, so npm is not required.

## Complete website/demo from GitHub

The main repository already contains Laravel. Do not create another Laravel application. Follow [the complete GitHub host commands](/docs/installation#option-b-run-the-complete-github-demodevelopment-host) to clone it, install Composer dependencies, create `.env` and an application key, configure the database, migrate, create an administrator and build assets with Node. `git clone` and `composer install` alone do not finish setup.

Normal seeding creates roles only. For sample content and reset controls on a disposable database, follow [demo setup](/docs/deployment/demo-setup). For a deployed application, follow [production setup](/docs/deployment/production); `php artisan serve` is a local development server.
