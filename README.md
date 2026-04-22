# LaraCoreKit

**A modular Laravel 13 starter kit for building admin-driven and content-driven apps with Filament 5, Livewire 4, and Tailwind 4.**

[![Laravel 13](https://img.shields.io/badge/Laravel-13-FF2D20?style=flat&logo=laravel&logoColor=white)](https://laravel.com)
[![Filament 5](https://img.shields.io/badge/Filament-5-F59E0B?style=flat)](https://filamentphp.com)
[![Livewire 4](https://img.shields.io/badge/Livewire-4-FB70A9?style=flat)](https://livewire.laravel.com)
[![Tailwind 4](https://img.shields.io/badge/Tailwind-4-06B6D4?style=flat&logo=tailwindcss&logoColor=white)](https://tailwindcss.com)
[![Tests](https://github.com/ProgrammerNomad/LaraCoreKit/workflows/Tests/badge.svg)](https://github.com/ProgrammerNomad/LaraCoreKit/actions)
[![Code Quality](https://github.com/ProgrammerNomad/LaraCoreKit/workflows/Code%20Quality/badge.svg)](https://github.com/ProgrammerNomad/LaraCoreKit/actions)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
[![Latest Release](https://img.shields.io/github/v/release/ProgrammerNomad/LaraCoreKit)](https://github.com/ProgrammerNomad/LaraCoreKit/releases)

---

LaraCoreKit gives you a clean starting point with auth, users, roles/permissions, blog, settings, media, multilingual content, and RTL support already structured for real projects. Each official module follows the same contract: migrations, routes, policies, translations, UI, admin resources, tests, and docs.

**Live Demo:** [https://www.laracorekit.com](https://www.laracorekit.com) | **Documentation:** [https://www.laracorekit.com/docs](https://www.laracorekit.com/docs)

---

## Screenshots

### Admin Dashboard
![Admin Dashboard](docs/images/screenshots/admin-dashboard.png)
*Filament 5 admin panel with dark mode support, resource management, and widgets*

### Blog Editor
![Blog Editor](docs/images/screenshots/blog-editor.png)
*Rich text editor with multilingual support, SEO fields, and draft management*

### UI Component Library
![UI Component Showcase](docs/images/screenshots/ui-showcase.png)
*175+ production-ready Tailwind components across 12 categories*

### RTL Support
![RTL Layout Support](docs/images/screenshots/rtl-support.png)
*Full right-to-left layout support for Arabic and other RTL languages*

### Demo Animations

**Creating a Blog Post**

![Create Blog Post](docs/images/screenshots/create-blog-post.gif)

**Language Switching**

![Language Switch](docs/images/screenshots/language-switching.gif)

---

---

## What Ships Today

LaraCoreKit includes these official modules out of the box:

- **Auth** - Login, registration, password reset, email verification, Sanctum API tokens
- **User Management** - User profiles, account settings, avatar uploads
- **Role & Permission System** - Full RBAC with Spatie Permission
- **Blog Module** - Multilingual blog with draft/published states, SEO fields, rich text editor
- **Settings Module** - Global site configuration, SEO defaults, multilingual settings
- **Media Module** - File uploads, image management, automatic thumbnails, S3/local storage
- **Multilingual Content** - English, Hindi, and Arabic translations built-in
- **RTL Support** - Full right-to-left layout support for Arabic
- **Admin Panel** - Filament 5 admin with resources, pages, and widgets
- **UI Components** - 175+ production-ready Tailwind components

## What is Optional

These features are available as separate addon modules or are planned for future releases:

- Billing and subscriptions
- Search integration (Meilisearch/Scout)
- Analytics dashboard
- Advanced notifications
- Teams / multi-tenancy
- E-commerce module
- Payment gateways (Stripe, Razorpay, PayPal)
- Module marketplace

---

## Supported Stack

| Technology | Version | Purpose |
|------------|---------|---------|
| **PHP** | 8.3+ | Server-side language |
| **Laravel** | 13.x | Backend framework |
| **Filament** | 5.x | Admin panel |
| **Livewire** | 4.x | Dynamic frontend components |
| **Tailwind CSS** | 4.x | Utility-first styling |
| **Alpine.js** | 3.x | Lightweight JavaScript (bundled with Livewire) |
| **Vite** | 5.x | Asset bundler |
| **MySQL/PostgreSQL/SQLite** | Latest | Database options |

---

## Quick Start

### Installation

```bash
# Clone the repository
git clone https://github.com/ProgrammerNomad/LaraCoreKit.git my-app
cd my-app

# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Create and setup database (SQLite for quick start)
touch database/database.sqlite
php artisan migrate --seed

# Link storage
php artisan storage:link

# Create admin user
php artisan filament:user

# Build frontend assets
npm run build

# Start development server
php artisan serve
```

Your application will be available at `http://localhost:8000`

Admin panel at `http://localhost:8000/admin`

### Development Mode

For active development with hot-reload:

```bash
# Terminal 1: Start Laravel dev server
php artisan serve

# Terminal 2: Start Vite dev server
npm run dev
```

---

## Demo Credentials

**Live Demo:** [https://www.laracorekit.com](https://www.laracorekit.com)

**Admin Panel:** [https://www.laracorekit.com/admin](https://www.laracorekit.com/admin)

### Demo Accounts

| Role | Email | Password |
|------|-------|----------|
| **Admin** | admin@laracorekit.com | password |
| **Editor** | editor@laracorekit.com | password |
| **User** | user@laracorekit.com | password |

> **Note:** Demo site resets every 24 hours. Destructive actions are blocked in demo mode.

---

---

## Included Modules

Every official LaraCoreKit module is installable, removable, versioned, and documented. Each module includes routes, migrations, seeders, permissions, policies, translations, frontend UI, Filament resources/pages, tests, and upgrade notes.

### Core Module
- Application bootstrapping
- Module loader system
- Locale management
- Shared layouts and components

### Auth Module
- User authentication (login, register, logout)
- Email verification
- Password reset functionality
- Sanctum API token authentication
- Two-factor authentication ready
- Session management

### User Module
- User profile management
- Avatar uploads
- Account settings
- Role and permission assignment
- Filament UserResource for admin
- Public/private profile options

### Blog Module
- Multilingual blog posts (EN/HI/AR)
- JSON-based translation storage
- Draft, Published, Archived statuses
- SEO-friendly slugs
- Rich text editor
- Featured images
- Meta tags and descriptions
- Categories and tags
- Livewire frontend
- Filament BlogResource for admin

### Settings Module
- Global site configuration
- Multilingual settings
- SEO defaults (title, meta, OG tags)
- Contact information
- Theme settings
- Filament SettingsPage

### Media Module
- File and image uploads
- Automatic thumbnail generation
- S3 and local storage support
- Media categories and organization
- Image optimization
- Spatie Media Library integration

---

## Features

---

## Features

### Modular Architecture
- Clean separation of concerns
- Each feature in its own module
- Predictable structure: routes, migrations, views, tests
- Easy to enable/disable modules
- Version control per module

### Admin Panel (Filament 5)
- Beautiful, responsive admin interface
- CRUD resources for all modules
- Custom pages and widgets
- Form builder with validation
- Table builder with filters and actions
- Dark mode support
- Role-based access control

### Frontend (Livewire 4 + Tailwind 4)
- Dynamic components without writing JavaScript
- 175+ pre-built UI components
- Responsive and mobile-friendly
- Dark mode toggle
- Alpine.js for interactions
- Fast page loads with Vite

### Multilingual System
- English, Hindi, and Arabic included
- JSON-based translation storage
- Locale middleware and switcher
- Translatable database fields
- RTL layout support for Arabic
- Easy to add more languages

### Role & Permission System
- Full RBAC with Spatie Permission
- Module-level permissions
- Role-based resource access
- Permission assignment UI in admin
- Policy-driven authorization
- Customizable permission structure

### Developer Experience
- Laravel Pint for code formatting
- PHPStan for static analysis
- PHPUnit test suite included
- GitHub Actions workflows
- Well-documented code
- IDE helper support

---

## UI Component Library

LaraCoreKit includes 175+ production-ready UI components built with Tailwind CSS and Livewire. View them all at [https://www.laracorekit.com/ui-showcase](https://www.laracorekit.com/ui-showcase)

**Component Categories:**
- Typography (headings, paragraphs, lists, code blocks)
- Buttons (variants, sizes, states, groups)
- Forms (inputs, selects, checkboxes, radios, file uploads)
- Navigation (headers, sidebars, breadcrumbs, tabs, pagination)
- Layouts (cards, grids, containers, sections)
- Data Display (tables, lists, badges, avatars, stats)
- Feedback (alerts, modals, notifications, progress bars)
- Charts (line, bar, pie, radar, area charts)
- Media (galleries, lightbox, video, audio players)
- Auth (login, register, profile, sessions)
- E-commerce (products, cart, checkout, reviews)
- Advanced (drag-drop, calendar, Kanban boards)

---

## Module Development

### Official Module Contract

Each LaraCoreKit module follows this structure:

```
modules/YourModule/
├── src/
│   ├── YourModuleServiceProvider.php
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Livewire/
│   │   └── Middleware/
│   ├── Models/
│   ├── Policies/
│   ├── Filament/
│   │   ├── Resources/
│   │   ├── Pages/
│   │   └── Widgets/
│   └── Console/
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── routes/
│   ├── web.php
│   └── api.php
├── views/
├── lang/
│   ├── en.json
│   ├── hi.json
│   └── ar.json
├── config/
├── tests/
│   ├── Feature/
│   └── Unit/
├── composer.json
├── README.md
└── CHANGELOG.md
```

### Creating a Module

Documentation for creating custom modules: [https://www.laracorekit.com/docs/contributing/module-development](https://www.laracorekit.com/docs/contributing/module-development)

---

---

## Quality Assurance

### Code Quality Tools

```bash
# Run tests
composer test
php artisan test

# Run code style fixer
composer pint
./vendor/bin/pint

# Run static analysis
./vendor/bin/phpstan analyse

# Run all quality checks
composer review
```

### Continuous Integration

LaraCoreKit uses GitHub Actions for automated testing:
- PHPUnit tests on every push and pull request
- Laravel Pint code style checks
- PHPStan static analysis
- Frontend asset build verification

View workflows: [.github/workflows](.github/workflows)

---

## Included Packages

### Laravel Official
- **Breeze** - Authentication scaffolding
- **Sanctum** - API authentication
- **Pint** - Code style formatter
- **Tinker** - REPL for Laravel

### Spatie
- **laravel-permission** - Role and permission management
- **laravel-medialibrary** - Media/file handling
- **laravel-sitemap** - Sitemap generation

### Filament
- **filament/filament** - Admin panel framework

### Livewire
- **livewire/livewire** - Full-stack framework

---

## Roadmap

### Version 1.0 (Next Release)
- [ ] Module marketplace/registry
- [ ] CLI module installer
- [ ] Packagist/Laravel installer support
- [ ] Enhanced documentation with screenshots
- [ ] Video tutorials
- [ ] Example applications

### Future Releases
- [ ] Search module (Meilisearch/Scout)
- [ ] Analytics dashboard module
- [ ] Notification center module
- [ ] Social authentication (Google, GitHub)
- [ ] Teams/multi-tenancy module
- [ ] E-commerce addon module
- [ ] Payment gateway integrations
- [ ] GraphQL API support
- [ ] Webhook system
- [ ] Audit log module
- [ ] Two-factor authentication UI

See full roadmap: [https://github.com/ProgrammerNomad/LaraCoreKit/issues](https://github.com/ProgrammerNomad/LaraCoreKit/issues)

---

## Documentation

Comprehensive documentation is available at [https://www.laracorekit.com/docs](https://www.laracorekit.com/docs)

### Quick Links
- [Introduction](https://www.laracorekit.com/docs/introduction)
- [Installation](https://www.laracorekit.com/docs/installation)
- [Quick Start](https://www.laracorekit.com/docs/quick-start)
- [Project Structure](https://www.laracorekit.com/docs/project-structure)
- [Module System](https://www.laracorekit.com/docs/core/modules-system)
- [Multilingual Support](https://www.laracorekit.com/docs/features/multilingual)
- [Contributing](https://www.laracorekit.com/docs/contributing)

---

## Contributing

We welcome contributions! Please see our [Contributing Guide](CONTRIBUTING.md) for details.

### Ways to Contribute
- Report bugs via [GitHub Issues](https://github.com/ProgrammerNomad/LaraCoreKit/issues)
- Suggest features or improvements
- Submit pull requests
- Improve documentation
- Share your LaraCoreKit projects
- Help others in discussions

### Development Process
1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Write/update tests
5. Run quality checks
6. Submit a pull request

Read the full guide: [CONTRIBUTING.md](CONTRIBUTING.md)

---

## Security

If you discover a security vulnerability, please use GitHub Security Advisories:

- Go to https://github.com/ProgrammerNomad/LaraCoreKit/security/advisories/new
- Or contact the repository owner directly through GitHub

All security vulnerabilities will be promptly addressed. See [SECURITY.md](SECURITY.md) for details.

Please see our [Security Policy](SECURITY.md) for more information.

---

## License

LaraCoreKit is open-source software licensed under the [MIT license](LICENSE).

---

## Support

- **Documentation:** https://www.laracorekit.com/docs
- **Issues:** https://github.com/ProgrammerNomad/LaraCoreKit/issues
- **Discussions:** https://github.com/ProgrammerNomad/LaraCoreKit/discussions

---

## Credits

Created and maintained by [Shiv Singh](https://github.com/ProgrammerNomad)

Built with these amazing open-source projects:
- [Laravel](https://laravel.com)
- [Filament](https://filamentphp.com)
- [Livewire](https://livewire.laravel.com)
- [Tailwind CSS](https://tailwindcss.com)
- [Alpine.js](https://alpinejs.dev)
- [Spatie Packages](https://spatie.be/open-source)

---

**Star this project on GitHub if you find it useful!**

If this project helps you:

- Star the repo
- Contribute improvements
- Share with the community

Thank you for supporting open-source!

---

**Happy Coding - Build Something Amazing!**