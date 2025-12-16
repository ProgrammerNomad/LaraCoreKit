# Demo Mode Setup Guide

**Auto-resetting demo environment for LaraCoreKit with Filament integration**

**Package**: [programmernomad/laracorekit-demo-module](https://packagist.org/packages/programmernomad/laracorekit-demo-module)  
**Repository**: [GitHub](https://github.com/ProgrammerNomad/laracorekit-demo-module)

---

## Quick Start

### 1. Install Package

```bash
composer require programmernomad/laracorekit-demo-module
```

### 2. Configure Environment

Add to `.env`:

```env
DEMO_MODE=true
DEMO_RESET_INTERVAL=30
DEMO_ADMIN_EMAIL=admin@demo.test
DEMO_ADMIN_PASSWORD=Admin@123
DEMO_USER_EMAIL=user@demo.test
DEMO_USER_PASSWORD=User@123
```

### 3. Update User Seeder

Modify `modules/User/Database/Seeders/UserSeeder.php` to use demo credentials:

```php
// Admin user
$admin = User::firstOrCreate(
    ['email' => config('demo.credentials.admin.email', 'admin@laracorekit.com')],
    [
        'name' => 'Admin User',
        'password' => Hash::make(config('demo.credentials.admin.password', 'password')),
        'email_verified_at' => now(),
    ]
);

// Regular user
$user = User::firstOrCreate(
    ['email' => config('demo.credentials.user.email', 'user@laracorekit.com')],
    [
        'name' => 'Demo User',
        'password' => Hash::make(config('demo.credentials.user.password', 'password')),
        'email_verified_at' => now(),
    ]
);
```

### 4. Add Frontend Banner (Optional)

Edit `modules/Auth/views/livewire/login.blade.php`:

```blade
{{-- Demo Banner --}}
@if(config('demo.enabled') && view()->exists('demo::components.login-banner'))
    @include('demo::components.login-banner', ['type' => 'user'])
@endif
```

### 5. Run Database Reset

```bash
php artisan demo:reset --force
```

### 6. Test Login

**Frontend**: http://localhost/login
- Email: `user@demo.test`
- Password: `User@123`

**Admin**: http://localhost/admin/login
- Email: `admin@demo.test`
- Password: `Admin@123`

**Done!** ✅ Demo banners appear automatically.

---

## What's Included

### ✅ Auto-Registered Features

The package automatically provides:

1. **Filament Admin Login Banner** - Shows credentials before login form (auto-injected via render hook)
2. **Artisan Command** - `php artisan demo:reset` to reset database
3. **Scheduled Reset** - Cron job every 30 minutes (configurable)
4. **Action Blocking** - Prevents destructive operations (user deletion, etc.)
5. **Middleware** - `demo` and `demo.block` for route protection
6. **Blade Component** - `@include('demo::components.login-banner')` for frontend

### 📋 Manual Setup Required

1. **User Seeder** - Update to use demo credentials from config
2. **Frontend Login** - Add `@include` directive to show banner
3. **Cron Job** - Setup Laravel scheduler on server

---

## Features

### Method 1: Packagist (Recommended)

**Production/Demo Server:**
```bash
composer require programmernomad/laracorekit-demo-module
```

**Local Development:**
```bash
composer require programmernomad/laracorekit-demo-module --dev
```

### Method 2: Local Development (Path Repository)

**For contributing or testing changes:**

```bash
# Clone package repo
cd C:\xampp\htdocs
git clone https://github.com/ProgrammerNomad/laracorekit-demo-module.git
```

**In `composer.json`:**
```json
{
    "repositories": [
        {
            "type": "path",
            "url": "../laracorekit-demo-module",
            "options": {
                "symlink": true
            }
        }
    ],
    "require-dev": {
        "programmernomad/laracorekit-demo-module": "@dev"
    }
}
```

```bash
composer update programmernomad/laracorekit-demo-module
```

**Benefits:**
- Changes in `laracorekit-demo-module/` instantly reflect in LaraCoreKit
- Perfect for development and testing

---

## Configuration

### Step 1: Publish Config File

```bash
php artisan vendor:publish --tag=demo-config
```

This creates `config/demo.php` with all customizable options.

### Step 2: Update `.env` (Production/Demo Server)

**Add to `.env` on your demo server:**
```env
# Demo Mode Configuration
DEMO_MODE=true
DEMO_RESET_INTERVAL=30

# Demo Credentials (displayed on login pages)
DEMO_ADMIN_EMAIL=admin@demo.test
DEMO_ADMIN_PASSWORD=Admin@123
DEMO_USER_EMAIL=user@demo.test
DEMO_USER_PASSWORD=User@123
```

### Step 3: Update `.env.example` (Repository)

**For contributors and documentation:**
```env
# Demo Mode (set to true on demo server only)
DEMO_MODE=false
DEMO_RESET_INTERVAL=30
DEMO_ADMIN_EMAIL=admin@demo.test
DEMO_ADMIN_PASSWORD=Admin@123
DEMO_USER_EMAIL=user@demo.test
DEMO_USER_PASSWORD=User@123
```

### Step 4: Customize Settings (Optional)

**Edit `config/demo.php`** to customize:

- Reset interval
- Allowed domains (security)
- Blocked actions
- Banner appearance
- Cleanup settings

**Example customizations:**
```php
// config/demo.php

'allowed_hosts' => [
    'laracorekit.mobrilz.digital',  // Your demo domain
    'localhost',
    '127.0.0.1',
],

'blocked_actions' => [
    'user.delete',
    'role.delete',
    'backup.run',
    // Add your custom actions
],

'banner' => [
    'background_color' => 'blue-50',  // Change colors
    'border_color' => 'blue-500',
    'text_color' => 'blue-900',
],
```

---

## Plesk Cron Setup

The demo module automatically schedules database resets using Laravel's task scheduler. You just need to add Laravel's scheduler to your server's cron.

### Step 1: Access Plesk Cron Jobs

1. Log into Plesk Control Panel
2. Go to **Websites & Domains**
3. Select **laracorekit.mobrilz.digital**
4. Click **Scheduled Tasks (Cron Jobs)**

### Step 2: Add Laravel Scheduler Cron

**Settings:**
- **Command**: `cd /var/www/vhosts/mobrilz.digital/laracorekit.mobrilz.digital && php artisan schedule:run >> /dev/null 2>&1`
- **Run**: Every minute (*/1)
- **Minute**: `*`
- **Hour**: `*`
- **Day of Month**: `*`
- **Month**: `*`
- **Day of Week**: `*`

**Alternative (if using different path):**
```bash
cd /home/username/public_html && /usr/bin/php artisan schedule:run >> /dev/null 2>&1
```

**Find your PHP path in Plesk:**
```bash
which php
# Output: /usr/bin/php8.2 or similar
```

**Full command with explicit PHP version:**
```bash
cd /var/www/vhosts/mobrilz.digital/laracorekit.mobrilz.digital && /usr/bin/php8.2 artisan schedule:run >> /dev/null 2>&1
```

### Step 3: Verify Cron is Running

**SSH into server:**
```bash
ssh username@laracorekit.mobrilz.digital
cd /var/www/vhosts/mobrilz.digital/laracorekit.mobrilz.digital

# Test schedule manually
php artisan schedule:list

# Check if demo:reset is scheduled
php artisan schedule:work
```

### Step 4: Monitor Cron Logs

**Create log output (temporary for testing):**
```bash
cd /var/www/vhosts/mobrilz.digital/laracorekit.mobrilz.digital && php artisan schedule:run >> storage/logs/cron.log 2>&1
```

**Check logs:**
```bash
tail -f storage/logs/cron.log
tail -f storage/logs/laravel.log
```

---

## UI Integration

### Add Demo Banner to Login Pages

The package provides Blade components that automatically show demo credentials when `DEMO_MODE=true`.

**Frontend Login** (`modules/Auth/views/login.blade.php`):
```blade
<x-demo-login-banner type="user" />
```

**Admin Login** (create `app/Filament/Pages/Auth/Login.php`):
```php
<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Login as BaseLogin;
use LaraCoreKit\DemoModule\Filament\Widgets\DemoBannerWidget;

class Login extends BaseLogin
{
    protected function getHeaderWidgets(): array
    {
        return [
            DemoBannerWidget::class,
        ];
    }
}
```

**Register custom login in Filament Panel**:
```php
// app/Providers/Filament/AdminPanelProvider.php
use App\Filament\Pages\Auth\Login;

$panel->login(Login::class)
```

**Admin Dashboard Widget**:
```php
// app/Filament/Pages/Dashboard.php
use LaraCoreKit\DemoModule\Filament\Widgets\DemoBannerWidget;

protected function getHeaderWidgets(): array
{
    return [
        DemoBannerWidget::class,
    ];
}
```

---

## Security & Testing
```php
use Modules\Demo\Filament\Widgets\DemoBannerWidget;

protected function getHeaderWidgets(): array
{
    return [
        DemoBannerWidget::class,
    ];
}
```

---

## Phase 4: Plesk Cron Setup

### Step 4.1: Access Plesk Cron Jobs

1. Log into Plesk Control Panel
2. Go to **Websites & Domains**
3. Select **laracorekit.mobrilz.digital**
4. Click **Scheduled Tasks (Cron Jobs)**

### Step 4.2: Add Laravel Scheduler Cron

**Settings:**
- **Command**: `cd /var/www/vhosts/mobrilz.digital/laracorekit.mobrilz.digital && php artisan schedule:run >> /dev/null 2>&1`
- **Run**: Every minute (*/1)
- **Minute**: `*`
- **Hour**: `*`
- **Day of Month**: `*`
- **Month**: `*`
- **Day of Week**: `*`

**Alternative (if using different path):**
```bash
cd /home/username/public_html && /usr/bin/php artisan schedule:run >> /dev/null 2>&1
```

**Find your PHP path in Plesk:**
```bash
which php
# Output: /usr/bin/php8.2 or similar
```

**Full command with explicit PHP version:**
```bash
cd /var/www/vhosts/mobrilz.digital/laracorekit.mobrilz.digital && /usr/bin/php8.2 artisan schedule:run >> /dev/null 2>&1
```

### Step 4.3: Verify Cron is Running

**SSH into server:**
```bash
ssh username@laracorekit.mobrilz.digital
cd /var/www/vhosts/mobrilz.digital/laracorekit.mobrilz.digital

# Test schedule manually
php artisan schedule:list

# Check if demo:reset is scheduled
php artisan schedule:work
```

### Step 4.4: Monitor Cron Logs

**Create log output (temporary for testing):**
```bash
cd /var/www/vhosts/mobrilz.digital/laracorekit.mobrilz.digital && php artisan schedule:run >> storage/logs/cron.log 2>&1
```

**Check logs:**
```bash
tail -f storage/logs/cron.log
tail -f storage/logs/laravel.log
```

---

## Phase 5: Security & Testing

### Step 5.1: Test Manual Reset

**SSH into server:**
```bash
cd /var/www/vhosts/mobrilz.digital/laracorekit.mobrilz.digital

# Run manual reset
php artisan demo:reset --force

# Verify database was reset
php artisan tinker
>>> \App\Models\User::count()
>>> \Modules\Blog\Models\Post::count()
```

### Step 5.2: Test Blocked Actions

1. Login as admin
2. Try to delete a user → Should show "Action disabled in demo mode"
3. Try to modify critical settings → Should be blocked
4. Upload a file → Should work (will be deleted on reset)

### Step 5.3: Security Checklist

- [ ] `DEMO_MODE=false` in local `.env`
- [ ] `DEMO_MODE=true` only on `laracorekit.mobrilz.digital`
- [ ] Verify `allowed_hosts` in config includes demo domain
- [ ] Test that demo banner shows on login pages
- [ ] Test that cron job runs every 30 minutes
- [ ] Verify uploaded files get deleted on reset
- [ ] Check sessions are cleared on reset
- [ ] Test that database credentials work after reset

### Step 5.4: Monitoring Setup

**Install Laravel Telescope (if not already):**
```bash
composer require laravel/telescope
php artisan telescope:install
php artisan migrate
```

**Monitor:**
- Scheduled commands at `/telescope/schedule`
- Database queries at `/telescope/queries`
- Logs at `/telescope/logs`

**Enable only in demo:**
```php
// config/telescope.php
'enabled' => env('TELESCOPE_ENABLED', env('DEMO_MODE', false)),
```

---

## Phase 6: CI/CD Integration

### Step 6.1: GitHub Actions Workflow

**File**: `.github/workflows/deploy-demo.yml`
```yaml
name: Deploy Demo Environment

on:
  push:
    branches:
      - main
      - demo

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - name: Checkout code
        uses: actions/checkout@v3

      - name: Deploy to Plesk
        uses: appleboy/ssh-action@master
        with:
          host: ${{ secrets.DEMO_SERVER_HOST }}
          username: ${{ secrets.DEMO_SERVER_USER }}
          key: ${{ secrets.DEMO_SERVER_SSH_KEY }}
          script: |
            cd /var/www/vhosts/mobrilz.digital/laracorekit.mobrilz.digital
            
            # Pull latest code
            git pull origin main
            
            # Install dependencies
            composer install --no-dev --optimize-autoloader
            
            # Run migrations (safe with fresh flag in demo)
            php artisan migrate --force
            
            # Clear caches
            php artisan config:cache
            php artisan route:cache
            php artisan view:cache
            
            # Build assets
            npm ci
            npm run build
            
            # Reset demo database immediately after deploy
            php artisan demo:reset --force
            
            # Restart queues if applicable
            php artisan queue:restart
```

### Step 6.2: GitHub Secrets Setup

**In GitHub Repository Settings → Secrets:**
```
DEMO_SERVER_HOST = laracorekit.mobrilz.digital
DEMO_SERVER_USER = your-ssh-username
DEMO_SERVER_SSH_KEY = (paste your private SSH key)
```

### Step 6.3: Plesk Git Integration (Alternative)

**If using Plesk Git:**
1. Go to **Git** in Plesk
2. Add repository: `https://github.com/yourusername/LaraCoreKit.git`
3. Set branch: `main` or `demo`
4. **Deployment Actions** → Add commands:
```bash
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan config:cache
npm ci && npm run build
php artisan demo:reset --force
```

---

## Phase 7: Production Deployment

### Step 7.1: Pre-Deployment Checklist

- [ ] All code committed to GitHub
- [ ] `.env` configured on Plesk server
- [ ] `DEMO_MODE=true` set
- [ ] Cron job added in Plesk
- [ ] SSH access verified
- [ ] Database backed up
- [ ] CI/CD secrets configured

### Step 7.2: Deploy to Production

**Option A: Manual Deployment**
```bash
# SSH into server
ssh username@laracorekit.mobrilz.digital

cd /var/www/vhosts/mobrilz.digital/laracorekit.mobrilz.digital

# Pull latest code
git pull origin main

# Install dependencies
composer install --no-dev --optimize-autoloader

# Publish demo config
php artisan vendor:publish --tag=demo-config

# Run migrations
php artisan migrate --force

# Seed demo data
php artisan db:seed --force

# Clear and cache
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Build assets
npm ci
npm run build

# Initial demo reset
php artisan demo:reset --force
```

**Option B: CI/CD Auto-Deploy**
```bash
# Just push to main branch
git push origin main

# GitHub Actions will handle deployment
```

### Step 7.3: Verify Deployment

**Visit site:**
- Frontend: https://laracorekit.mobrilz.digital/login
- Admin: https://laracorekit.mobrilz.digital/admin/login

**Check:**
- [ ] Demo banner visible on login pages
- [ ] Demo credentials work
- [ ] Admin dashboard shows demo widget
- [ ] Can create blog post (temporary)
- [ ] Wait 30 minutes → verify auto-reset worked
- [ ] Check logs: `storage/logs/laravel.log`

### Step 7.4: Post-Deployment Monitoring

**Monitor for first 24 hours:**
```bash
# Watch cron execution
tail -f storage/logs/laravel.log | grep "Demo database reset"

# Check scheduled tasks
php artisan schedule:list

# Monitor Telescope
# Visit: https://laracorekit.mobrilz.digital/telescope
```

---

## Troubleshooting

### Issue: Cron not running

**Solution:**
```bash
# Check if cron daemon is running
sudo service cron status

# Check Plesk cron logs
tail -f /var/log/cron

# Manually test Laravel scheduler
cd /var/www/vhosts/mobrilz.digital/laracorekit.mobrilz.digital
php artisan schedule:work
```

### Issue: Demo reset fails

**Solution:**
```bash
# Check Laravel logs
tail -f storage/logs/laravel.log

# Run manually with verbose output
php artisan demo:reset --force -vvv

# Check database connection
php artisan tinker
>>> DB::connection()->getPdo()
```

### Issue: Demo banner not showing

**Solution:**
```php
// Check config
php artisan config:clear
php artisan tinker
>>> config('demo.enabled')
>>> config('demo.banner.show_on_login')

// Clear view cache
php artisan view:clear
```

### Issue: Files not being deleted

**Solution:**
```bash
# Check permissions
ls -la storage/app/public/media/
chmod -R 775 storage/app/public/media/
chown -R www-data:www-data storage/app/public/media/

# Manual cleanup test
php artisan tinker
>>> \Illuminate\Support\Facades\File::cleanDirectory(storage_path('app/public/media'))
```

---

## Module Management

### Option 1: Disable Demo Module (Recommended for End Users)

**In `.env`:**
```env
DEMO_MODE=false
DEMO_MODULE_ENABLED=false
```

**What this does:**
- Module code remains in `modules/Demo/`
- Service provider won't register
- No demo features active
- Zero overhead (not loaded)

**When to use:**
- Production environments
- Local development (non-demo)
- Temporarily disable without removing files

---

### Option 2: Remove Demo Module Completely

**If you want to delete the module entirely:**

**Step 1: Disable in config**
```php
// config/modules.php
'modules' => [
    // Comment out or remove:
    // 'Demo' => [
    //     'enabled' => env('DEMO_MODULE_ENABLED', false),
    //     'provider' => \Modules\Demo\DemoServiceProvider::class,
    // ],
],
```

**Step 2: Remove from ModuleServiceProvider**
```php
// app/Providers/ModuleServiceProvider.php
// Remove these lines:
// if (config('modules.modules.Demo.enabled')) {
//     $this->app->register(\Modules\Demo\DemoServiceProvider::class);
// }
```

**Step 3: Delete module directory**
```bash
# PowerShell
Remove-Item -Recurse -Force modules\Demo

# Or Git (to keep in history)
git rm -r modules/Demo
git commit -m "feat: remove Demo module"
```

**Step 4: Update autoload**
```bash
composer dump-autoload
```

---

### Option 3: Extract as Standalone Composer Package (Advanced)

**This allows users to `composer require/remove` the demo module**

**Benefits:**
- ✅ Users can install: `composer require laracorekit/demo-module`
- ✅ Users can remove: `composer remove laracorekit/demo-module`
- ✅ Version management (1.0.0, 1.1.0, etc.)
- ✅ Separate repo, separate maintenance
- ✅ Can be used in other Laravel projects

**Steps to extract:**

**1. Create new repository**
```bash
# On GitHub, create: laracorekit/demo-module
git clone https://github.com/laracorekit/demo-module.git
cd demo-module
```

**2. Copy module files**
```bash
# From LaraCoreKit project
cp -r modules/Demo/* demo-module/
```

**3. Create standalone `composer.json`**

**File**: `composer.json` (in demo-module repo root)
```json
{
    "name": "laracorekit/demo-module",
    "description": "Auto-resetting demo environment module for Laravel applications",
    "keywords": ["laravel", "demo", "module", "filament"],
    "license": "MIT",
    "type": "library",
    "authors": [
        {
            "name": "Your Name",
            "email": "your.email@example.com"
        }
    ],
    "require": {
        "php": "^8.2",
        "laravel/framework": "^11.0|^12.0",
        "filament/filament": "^3.0"
    },
    "autoload": {
        "psr-4": {
            "LaraCoreKit\\DemoModule\\": "src/"
        }
    },
    "extra": {
        "laravel": {
            "providers": [
                "LaraCoreKit\\DemoModule\\DemoServiceProvider"
            ]
        }
    },
    "minimum-stability": "dev",
    "prefer-stable": true
}
```

**4. Update namespace in all PHP files**
```php
// Change from:
namespace Modules\Demo;

// To:
namespace LaraCoreKit\DemoModule;
```

**5. Create README.md for package**
```markdown
# Demo Module for Laravel

Auto-resetting demo environment with Filament integration.

## Installation

composer require laracorekit/demo-module

## Configuration

php artisan vendor:publish --tag=demo-config

## Usage

See full documentation...
```

**6. Publish to Packagist**
```bash
# Push to GitHub
git add .
git commit -m "Initial release"
git tag 1.0.0
git push origin main --tags

# Submit to Packagist.org
# Go to: https://packagist.org/packages/submit
# Enter: https://github.com/laracorekit/demo-module
```

**7. Install in LaraCoreKit**

**Remove local module:**
```bash
git rm -r modules/Demo
```

**Install via Composer:**
```bash
composer require laracorekit/demo-module
```

**Update config/modules.php:**
```php
'modules' => [
    'Demo' => [
        'enabled' => env('DEMO_MODULE_ENABLED', false),
        'provider' => \LaraCoreKit\DemoModule\DemoServiceProvider::class,
    ],
],
```

**8. Users can now uninstall:**
```bash
# Remove package
composer remove laracorekit/demo-module

# Remove from config/modules.php
# Done! Module completely removed
```

---

### Comparison: Built-in vs Composer Package

| Feature | Built-in Module | Composer Package |
|---------|----------------|------------------|
| Installation | Included by default | `composer require` |
| Removal | Delete directory | `composer remove` |
| Updates | Git pull main repo | `composer update` |
| Versioning | Follows main repo | Independent (1.0, 2.0) |
| Portability | LaraCoreKit only | Any Laravel project |
| Maintenance | Same repo | Separate repo |
| User Control | Less flexible | Full control |

---

### Recommended Approach

**For LaraCoreKit Distribution:**

**Option A: Keep Built-in (Default)**
- Include in main repo
- Users disable via `.env`
- Easier for beginners
- Less setup complexity

**Option B: Make it Optional**
- Don't include in `modules/` by default
- Provide installation docs
- Users install if needed: `composer require laracorekit/demo-module`
- Cleaner for production users

**Option C: Hybrid (Best of Both)**
- Include in repo but **disabled by default**
- `.env.example` has `DEMO_MODULE_ENABLED=false`
- README shows how to enable OR how to remove completely
- Users choose their path

---

### Implementation for "Composer Uninstallable"

**If you want users to be able to `composer remove` it:**

**1. Extract to package (follow Option 3 above)**

**2. Remove from main LaraCoreKit repo**
```bash
git rm -r modules/Demo
git commit -m "feat: extract Demo module to separate package"
```

**3. Add as dev dependency**
```bash
composer require laracorekit/demo-module --dev
```

**4. Update documentation**
```markdown
## Demo Module (Optional)

Install demo auto-reset functionality:

composer require laracorekit/demo-module

Remove when not needed:

composer remove laracorekit/demo-module
```

**5. Users have full control**
```bash
# Install
composer require laracorekit/demo-module

# Enable
# .env: DEMO_MODULE_ENABLED=true

# Disable
# .env: DEMO_MODULE_ENABLED=false

# Remove completely
composer remove laracorekit/demo-module
```

---

## Maintenance

### Regular Tasks

**Weekly:**
- Check cron logs for failures
- Monitor storage usage (media uploads)
- Review Telescope for anomalies

**Monthly:**
- Update demo credentials (security)
- Review blocked actions list
- Test manual reset
- Backup database before changes

---

## Summary

**Module Benefits:**
- ✅ Isolated demo logic
- ✅ Easy to enable/disable
- ✅ Production-safe (domain whitelisting)
- ✅ Auto-resetting (30-min cron)
- ✅ Plesk-compatible
- ✅ CI/CD integrated
- ✅ Extractable as package

**Next Steps:**
1. Create module structure (Phase 1)
2. Configure `.env` on Plesk (Phase 2)
3. Add UI banners (Phase 3)
4. Setup Plesk cron (Phase 4)
5. Test & deploy (Phase 5-7)

**Questions? Issues?**
Refer to troubleshooting section or Laravel docs.
