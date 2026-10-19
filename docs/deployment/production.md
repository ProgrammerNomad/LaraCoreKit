# Production setup

Start with [package installation](/docs/installation) and test in staging. The package supplies frontend and admin features; your application remains responsible for infrastructure and operations.

1. Set `APP_ENV=production`, `APP_DEBUG=false`, a unique application key and correct HTTPS `APP_URL`.
2. Keep `DEMO_MODE=false`. Do not seed demo accounts or run the demo reset scheduler in a customer application.
3. Install from reviewed lockfiles with `composer install --no-dev --optimize-autoloader`. Build and publish assets during deployment; do not run a Vite development server publicly.
4. Back up data before running `php artisan migrate --force`. Create the first administrator using `php artisan laracorekit:admin` and a unique password.
5. Configure transactional mail and test password recovery. Email-verification enforcement is not bundled.
6. Configure storage, file-size/type restrictions, queue workers and scheduled tasks appropriate to your application. Run `php artisan storage:link` for public local uploads.
7. Cache configuration/routes/views, monitor failures, test backups and restore procedures, and run dependency audits regularly.
8. Verify anonymous visitors cannot read unpublished or future-dated posts, regular users cannot enter the admin panel, and editors cannot manage users or roles.

The installer never creates known production credentials. Registration is disabled by default. Login failures are rate limited; choose a shared cache store across application servers so limits apply consistently.

Security reports belong in the repository's [security policy](https://github.com/ProgrammerNomad/LaraCoreKit/security/policy), not public issues containing sensitive details.

## Application deployment

Create the starter application as described in the installation guide. Commit the resulting application lockfile. Deploy from that lockfile rather than resolving new versions on the production server:

```bash
composer install --no-dev --prefer-dist --optimize-autoloader
php artisan migrate --force
php artisan storage:link
php artisan optimize
```

Run migrations only after a backup and staging verification. The package installer preserves published configuration and refreshes assets. The package's default public views do not require the demo host's npm build. Custom frontend assets still need their own build.

## Website and demonstration host

The promotional website is maintained separately at https://github.com/ProgrammerNomad/laracorekit-website. Use its deployment instructions for laracorekit.com. The starter is a complete application: build assets with npm ci, npm run build:core and npm run build, deploy the application lockfile, and point the document root at public/.

Configure HTTPS, mail, workers, scheduler, uploads and backups for your application. Local source checks do not verify your production infrastructure.
