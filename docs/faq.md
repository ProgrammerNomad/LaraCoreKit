# Frequently Asked Questions (FAQ)

Comprehensive answers to common questions about LaraCoreKit.

---

## General Questions

### What is LaraCoreKit?

LaraCoreKit is a modular Laravel 13 starter kit that provides a feature-rich foundation for building admin-driven and content-driven applications. It combines Filament 5 (admin panel), Livewire 4 (dynamic frontend), and Tailwind 4 (styling) with built-in modules for auth, blog, media, settings, multilingual support, and RTL layouts.

### Is LaraCoreKit free?

Yes, 100% free and open-source under the MIT license. You can use it for personal projects, commercial projects, and client work without any restrictions.

### Who maintains LaraCoreKit?

Created and maintained by Shiv Singh (ProgrammerNomad) and the open-source community. It is a community-driven project.

### Is LaraCoreKit production-ready?

LaraCoreKit is actively developed with quality assurance tools (tests, code formatting, static analysis). As a newer project, we recommend thorough testing before production deployment.

### What are the system requirements?

- PHP 8.3 or higher
- Composer 2.x
- Node.js 18.x or higher
- MySQL 8.0+, PostgreSQL 13+, or SQLite 3.x
- 512MB RAM minimum (2GB+ recommended)

---

## Installation & Setup

### I get "Class not found" errors

```bash
composer dump-autoload
php artisan optimize:clear
```

### Migration fails with database connection error

1. Check `.env` database credentials
2. Ensure database server is running
3. For MySQL, create database: `CREATE DATABASE laracorekit;`

### Vite build fails with Node.js errors

```bash
rm -rf node_modules package-lock.json
npm install --legacy-peer-deps
npm run build
```

### White screen after installation

Check:
- `.env` file exists and configured
- Storage permissions: `chmod -R 755 storage bootstrap/cache`
- Run `php artisan config:clear`
- Check `storage/logs/laravel.log`

---

## Features

### Does it include a blog?

Yes! Full blog module with multilingual posts, rich text editor, SEO fields, draft/published states, Filament admin, and Livewire frontend.

### Does it support e-commerce?

UI components are included, but no full e-commerce module yet. Planned as future addon module.

### Does it have payment integration?

No, payment systems are planned as separate addon modules (Stripe, Razorpay, PayPal).

### Can I build a SaaS with this?

Partially. Includes foundation (auth, admin, roles/permissions, API), but lacks subscription billing and multi-tenancy. These are planned as addon modules.

### How many languages are included?

Three: English, Hindi, and Arabic. Easy to add more via JSON translation files.

### What's included in the 175+ components?

Typography, Buttons, Forms, Navigation, Layouts, Data Display, Feedback, Charts, Media, Auth, E-commerce, and Advanced components.

---

## Modules

### Can I remove modules I don't need?

Yes! Each module is self-contained. To remove:
1. Delete module directory
2. Remove service provider from `bootstrap/providers.php`
3. Remove module routes
4. Update tests

### Can I disable a built-in module?

Set `enabled => false` in `config/modules.php`, then run `php artisan optimize:clear`.

### Can I create my own modules?

Yes! See [Module Development Guide](https://www.laracorekit.com/docs/contributing/module-development).

### I added a new module but routes aren't loading

1. Add to `config/modules.php` with `enabled => true`
2. Add namespace to `composer.json` autoload psr-4
3. Run `composer dump-autoload && php artisan optimize:clear`

---

## Admin Panel

### I can't log into the admin panel

Create admin user:
```bash
php artisan filament:user
```

### How do I change the admin URL?

Edit `app/Providers/Filament/AdminPanelProvider.php`:
```php
->path('dashboard')  // Changes /admin to /dashboard
```

### Where are Filament admin resources?

Inside each module: `modules/{Module}/src/Filament/Resources/`

### Filament admin not loading

Check:
- Admin user created
- Assets published: `php artisan filament:assets`
- Clear cache: `php artisan cache:clear`

---

## Customization

### Can I change the design/styling?

Yes! Edit `tailwind.config.js`, modify Blade templates, add custom CSS in `resources/css/app.css`, then run `npm run build`.

### Can I use Bootstrap instead of Tailwind?

Not recommended. Entire UI built with Tailwind. Switching requires rewriting all templates.

### Can I use Inertia instead of Livewire?

Not easily. Livewire deeply integrated. Consider Laravel Breeze with Inertia for that preference.

### Can I customize UI components?

Yes! Edit directly in `modules/*/views/`, extend with your variants, or replace entirely.

---

## Multilingual & RTL

### How does multilingual content work?

Two approaches:
1. **Static text** - JSON files in `lang/` directories
2. **Database content** - JSON columns for translatable fields

### How do I add a new language?

1. Add `lang/fr.json`
2. Add to each module: `modules/*/lang/fr.json`
3. Update language switcher
4. Add to `config/app.php` supported locales

### How does RTL support work?

- Locale middleware detects Arabic/Hebrew
- Tailwind RTL plugin handles layout mirroring
- Use `rtl:` prefix for custom RTL styles

### Can I make the site RTL by default?

Set default locale in `config/app.php`:
```php
'locale' => 'ar',
```

---

## Development

### How do I run tests?

```bash
php artisan test
# Or
composer test
```

### How do I check code quality?

```bash
composer review  # Runs all checks
# Or individually:
composer pint        # Format code
composer pint-test   # Check style
composer phpstan     # Static analysis
```

### How do I enable debug mode?

Edit `.env`:
```env
APP_DEBUG=true
APP_ENV=local
```
Never enable in production!

### I updated a view but see old content

```bash
php artisan view:clear
```

### How do I see SQL queries?

Install Laravel Telescope:
```bash
composer require laravel/telescope --dev
php artisan telescope:install
php artisan migrate
```
Visit `/telescope`

---

## Deployment

### Can I deploy to shared hosting?

Yes, but requires PHP 8.3+, Composer, Node.js, and SSH. Modern platforms (Forge, Vapor, DigitalOcean) recommended.

### Does it work with Docker?

Yes! Works with Laravel Sail or custom Docker setups:
```bash
composer require laravel/sail --dev
php artisan sail:install
./vendor/bin/sail up
```

### Does it work with Laravel Forge/Vapor?

Yes! Standard Laravel application compatible with all Laravel deployment tools.

### How do I set up queues?

Configure in `.env`:
```env
QUEUE_CONNECTION=database
```

Run:
```bash
php artisan queue:table
php artisan migrate
php artisan queue:work
```

For production, use Supervisor.

---

## Performance & Security

### How do I speed up my app?

```bash
php artisan optimize  # Cache everything
```

Use Redis for cache/sessions/queues in `.env`:
```env
CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis
```

### Is LaraCoreKit secure?

Includes: CSRF protection, XSS protection, SQL injection protection, password hashing, rate limiting, Sanctum API auth, and RBAC.

### How do I report security vulnerabilities?

Use GitHub Security Advisories (recommended):
- https://github.com/ProgrammerNomad/LaraCoreKit/security/advisories/new

Or contact the repository owner directly through GitHub. See [Security Policy](SECURITY.md) for full details.

**Do not create public issues for security vulnerabilities.**

### Is it GDPR compliant?

Provides tools (data export, deletion) but compliance is your responsibility. Consult legal counsel.

---

## Comparisons

### LaraCoreKit vs Laravel Breeze?

- Breeze: Minimal auth only
- LaraCoreKit: Full starter with admin, blog, media, settings

Use Breeze for minimal auth, LaraCoreKit for complete foundation.

### LaraCoreKit vs Laravel Jetstream?

- Jetstream: Auth + teams + 2FA + API
- LaraCoreKit: Auth + admin + blog + media + multilingual

Different focus: Jetstream on auth, LaraCoreKit on content management.

### LaraCoreKit vs Filament?

- Filament: Admin panel framework
- LaraCoreKit: Complete starter using Filament

LaraCoreKit includes Filament plus frontend, modules, multilingual.

See detailed comparisons:
- [LaraCoreKit vs Larament](comparisons/laracorekit-vs-larament.md)
- [LaraCoreKit vs Official Livewire Starter](comparisons/laracorekit-vs-livewire-starter.md)

---

## Troubleshooting

### Images not displaying

Check:
- Storage linked: `php artisan storage:link`
- Permissions: `chmod -R 755 storage`
- Config: `config/filesystems.php`
- APP_URL in `.env`

### Dark mode not working

Add to `<html>` tag:
```blade
<html class="dark">
```

Or toggle with Alpine.js:
```javascript
document.documentElement.classList.toggle('dark');
```

---

## Support

### Where can I get help?

- **Documentation:** https://www.laracorekit.com/docs
- **GitHub Issues:** https://github.com/ProgrammerNomad/LaraCoreKit/issues
- **Discussions:** https://github.com/ProgrammerNomad/LaraCoreKit/discussions

### How do I report bugs?

Use [Bug Report template](https://github.com/ProgrammerNomad/LaraCoreKit/issues/new?template=bug_report.md) with Laravel version, PHP version, steps to reproduce, and error logs.

### Can I contribute?

Yes! See [Contributing Guide](CONTRIBUTING.md). Fix bugs, add features, improve docs, write tests, or help in discussions.

### Is there paid support?

Not currently. Community support is available via GitHub Discussions and Issues. See [Support section in README](../README.md#support).

---

## License

### Can I use this for client projects?

Yes! MIT license allows commercial use without restriction.

### Do I need to credit LaraCoreKit?

Not required, but appreciated! Only requirement is including the license file.

### Can I sell products built with LaraCoreKit?

Yes! MIT license allows commercial products.

### Can I create paid themes/modules?

Yes! Create and sell extensions for LaraCoreKit.

---

**Don't see your question?**

Search [GitHub Issues](https://github.com/ProgrammerNomad/LaraCoreKit/issues) or ask in [Discussions](https://github.com/ProgrammerNomad/LaraCoreKit/discussions).

Last updated: April 22, 2026
