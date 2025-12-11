# LaraCoreKit
**A Universal Modular Laravel 12 Starter Kit with Livewire, TailwindCSS, Filament Admin, Multilingual Blog (EN/HI/AR), RTL Support & Role-Based Permissions**

[![Laravel](https://img.shields.io/badge/Laravel-12-red.svg)]()
[![Livewire](https://img.shields.io/badge/Livewire-3-purple)]()
[![Filament](https://img.shields.io/badge/Filament-3-blue.svg)]()
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)]()
[![Open Source](https://img.shields.io/badge/Open%20Source-brightgreen)]()

---

## Overview

**LaraCoreKit** is a modular, production-ready **Laravel 12 Starter Kit** for modern full-stack applications.
It includes first-class module-based architecture, allowing built-in features (User, Blog, Settings, Media) and optional addons (E-commerce, Payments, Analytics) to plug into your project cleanly.

Designed for speed, scalability, multilingual apps, admin dashboards, and enterprise-grade role/permission management, LaraCoreKit provides everything you need to start any serious Laravel project.

---

## Core Technologies

- Laravel 12 (latest modern backend framework)
- Livewire 3 (dynamic frontend components with Alpine.js bundled)
- TailwindCSS 4 (full utility-first styling)
- Filament Admin v3 (beautiful admin panel)
- Spatie Permission (RBAC)
- Spatie Media Library (file uploads & image handling)
- Sanctum (API authentication)
- Vite (fast dev bundler)
- MySQL / PostgreSQL / SQLite ready

---

## Modular Architecture

LaraCoreKit supports module-based development, where each feature lives inside its own module (with its own routes, migrations, Livewire components, Filament Resources, translations, config, etc.)

### Default Included Modules

| Module | Admin | Frontend | Description |
|--------|-------|----------|-------------|
| Core | Yes | - | Bootstrapping, module loader, locale, layouts |
| Auth | Yes | Yes | Login, register, email verify, 2FA, Sanctum API |
| User | Yes | Yes | User profiles, role/permission assignment |
| Blog | Yes | Yes | Multilingual blog system (EN/HI/AR, JSON fields) |
| Settings | Yes | API | Site config, SEO defaults, language settings |
| Media | Yes | Yes | File uploads, media management |

### Optional Addon Modules (External Repos)

- Ecommerce (multilingual products + checkout)
- Payment Gateways (Stripe, Razorpay, PayPal, Paytm, Paystack)
- Analytics Dashboard (admin widgets + user insights)
- Notifications system
- Search (Meilisearch / fulltext)
- API v2 / GraphQL

Modules can be enabled/disabled, versioned, moved to separate repositories, or installed via Composer.

---

## Key Features

### Authentication & Security (Module: Auth)
- Laravel Breeze scaffolding
- Email verification
- Password reset
- Sanctum token authentication
- Two-factor authentication ready
- CSRF protection
- Brute-force throttling

### User Management (Module: User)
- User profile with avatar
- Account settings
- Role & Permission Management (Spatie)
- Activity logging support
- Public or private user profiles
- Filament UserResource

### Blog System (Module: Blog)
- Multilingual blog (EN / HI / AR)
- JSON-based translation fields
- Livewire frontend blog pages
- Filament admin for blog CRUD
- SEO-friendly slugs
- Draft / Published / Archived statuses
- Rich text editor support
- RTL support for Arabic pages

### Global Settings (Module: Settings)
- Filament Admin Settings Page
- Multilingual site configuration
- SEO defaults (title, meta, social sharing)
- Logo, favicon, theme color settings

### Media Management (Module: Media)
- Image/file uploads
- Automatic thumbnail generation
- S3/local storage support
- Media organizer (categories, tags)

### Role & Permission System
- Full RBAC using spatie/laravel-permission
- Module-level CRUD permissions
- User-specific permission assignment
- Admin can assign roles per module
- Filament Permission Management UI

### Developer Tools
- Laravel Telescope (debugging)
- Laravel Pint (PSR-12 formatting)
- Debugbar (development only)
- IDE Helper
- PHPUnit test suite
- Scribe API documentation generator

### SEO & Analytics
- Meta tags management
- Sitemap generator (Spatie Sitemap)
- Open Graph + Twitter Cards
- Google Analytics integration ready

---

## Multilingual System (EN / HI / AR)

- Filament-native `->translatable()` fields
- JSON stored translations in same row
- Livewire auto-switch rendering
- RTL layout switch for Arabic
- Locale middleware
- Frontend locale switcher

```blade
<html lang="{{ app()->getLocale() }}" 
      dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
```

---

## Directory Structure

```
LaraCoreKit/
├── app/
│   ├── Console/
│   ├── Exceptions/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   ├── Providers/
│   │   ├── AppServiceProvider.php
│   │   └── ModuleServiceProvider.php       # registers modules at boot
│   ├── Filament/                            # global Filament customizations (if any)
│   └── Models/                              # core models (User, etc.) — keep minimal
│
├── bootstrap/
│
├── config/
│   ├── app.php
│   ├── modules.php                          # list of default modules & metadata
│   └── ...                                  # other configs
│
├── modules/                                  # default bundled modules (local path)
│   ├── Core/
│   │   ├── composer.json
│   │   └── src/
│   │       ├── CoreServiceProvider.php
│   │       ├── Console/
│   │       ├── Http/
│   │       └── ...
│   │
│   ├── Auth/
│   │   ├── composer.json
│   │   └── src/
│   │       ├── AuthServiceProvider.php
│   │       ├── Http/Controllers/
│   │       └── Views/
│   │
│   ├── User/
│   │   ├── composer.json
│   │   └── src/
│   │       ├── UserServiceProvider.php
│   │       ├── Models/                      # e.g., Profile (if separate)
│   │       ├── Filament/Resources/          # UserResource.php
│   │       ├── Http/Controllers/
│   │       └── Database/
│   │           ├── migrations/
│   │           └── seeders/
│   │
│   ├── Blog/
│   │   ├── composer.json
│   │   └── src/
│   │       ├── BlogServiceProvider.php
│   │       ├── Models/                      # Blog.php
│   │       ├── Filament/Resources/          # BlogResource.php
│   │       ├── Http/Controllers/
│   │       ├── Http/Livewire/               # Livewire components for frontend editors/listing
│   │       ├── resources/
│   │       │   ├── views/
│   │       │   └── lang/
│   │       └── Database/
│   │           ├── migrations/
│   │           └── seeders/
│   │
│   ├── Settings/
│   │   ├── composer.json
│   │   └── src/
│   │       ├── SettingsServiceProvider.php
│   │       ├── Filament/Pages/              # SettingsPage.php (Filament single page)
│   │       └── Database/
│   │
│   └── Media/
│       ├── composer.json
│       └── src/
│           ├── MediaServiceProvider.php
│           ├── Models/                      # if using custom media model
│           └── Http/Controllers/            # upload endpoints
│
├── database/
│   ├── migrations/                           # core migrations
│   ├── seeders/                              # calls module seeders if needed
│   └── factories/
│
├── resources/
│   ├── views/                                # main layout wrappers & shared partials
│   ├── css/                                  # tailwind entry (resources/css/app.css)
│   └── js/                                   # vite entry (resources/js/app.js)
│
├── routes/
│   ├── web.php                               # core web routes and module bootstrapping
│   ├── api.php
│   └── filament.php                          # special filament routes (if needed)
│
├── tests/
│   ├── Feature/
│   └── Unit/
│
├── .github/
│   ├── workflows/                            # CI (tests, lint)
│   └── ISSUE_TEMPLATE.md
│
├── docs/                                     # documentation (architecture, modules guide)
│
├── vendor/
│
├── composer.json
├── package.json
├── vite.config.js
├── .env.example
└── README.md
```

---

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/ProgrammerNomad/LaraCoreKit.git
cd LaraCoreKit
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

Update database settings in `.env`.

### 4. Migrate & Seed

```bash
php artisan migrate --seed
```

Includes:
- Admin user (optional)
- Demo blog posts
- Default roles & permissions

### Admin Panel Access

Create an admin user:

```bash
php artisan filament:user
```

Default Admin URL: `/admin`

### Language Switching

Use the provided `SetLocale` middleware.

Available locales: `en`, `hi`, `ar`

### Screenshots (Coming Soon)

- screenshots/dashboard.png
- screenshots/blog-editor.png
- screenshots/rtl-layout.png

---

## Included Packages

### Laravel Official

- Breeze - Authentication scaffolding
- Sanctum - API authentication
- Telescope - Application debugging
- Sail (optional) - Docker development environment
- Pint - Code style formatter

### Spatie

- laravel-permission - Role and permission management
- laravel-medialibrary - Media/file management
- laravel-sitemap - Sitemap generation
- laravel-backup - Database and file backups

### Filament Ecosystem

- Filament Admin v3 - Admin panel
- Filament Translatable Plugin - Multilingual content

### Developer Tools

- laravel/debugbar - Development debugging
- laravel-ide-helper - IDE autocompletion

---

## Roadmap

### Coming Soon

- GraphQL API support
- Blog categories & tags
- Advanced analytics dashboard
- Social login (Google, GitHub)
- Import/export tools
- Audit log module
- Search indexing module
- Module Marketplace (addon installer UI)

---

## Contributing

We welcome all contributions!

- Fork this repo
- Create a feature branch
- Commit changes
- Open a Pull Request

Follow PSR-12 and good coding practices.

---

## Code of Conduct

This project follows the Contributor Covenant code of conduct.

---

## License

LaraCoreKit is open-source software licensed under the MIT License.

---

## Maintainer

Shiv Singh (ProgrammerNomad)

GitHub: [https://github.com/ProgrammerNomad](https://github.com/ProgrammerNomad)

---

## Support LaraCoreKit

If this project helps you:

- Star the repo
- Contribute improvements
- Share with the community

Thank you for supporting open-source!

---

**Happy Coding — Build Something Amazing!**