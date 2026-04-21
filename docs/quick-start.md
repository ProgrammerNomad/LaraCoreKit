# Quick Start

**Estimated time:** 5 minutes  
**Difficulty:** Beginner

---

Get LaraCoreKit running locally in just a few commands. This guide assumes you have PHP 8.2+, Composer, and Node.js installed.

---

## Prerequisites

Before starting, ensure you have:

-  PHP 8.2 or higher
-  Composer 2.x
-  Node.js 18+ & npm
-  MySQL, PostgreSQL, or SQLite
-  Git

### Check your environment:

```bash
php -v        # Should show 8.2+
composer -V   # Should show 2.x
node -v       # Should show 18+
```

---

## Installation (5 Minutes)

### Step 1: Clone the Repository

```bash
git clone https://github.com/ProgrammerNomad/LaraCoreKit.git
cd LaraCoreKit
```

**Expected output:**
```
Cloning into 'LaraCoreKit'...
remote: Enumerating objects: 1523, done.
remote: Counting objects: 100% (1523/1523), done.
```

---

### Step 2: Install Dependencies

```bash
composer install
npm install
```

**Expected output:**
```
Installing dependencies from lock file
Package operations: 127 installs, 0 updates, 0 removals
  - Installing doctrine/inflector (2.0.8)
  - Installing illuminate/contracts (v11.x-dev)
  ...
```

⏱ **This takes ~2-3 minutes**

---

### Step 3: Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

**Expected output:**
```
Application key set successfully.
```

---

### Step 4: Configure Database

Edit `.env` file:

**Option A: SQLite (Easiest - Recommended for local)**

```env
DB_CONNECTION=sqlite
# DB_DATABASE=database/database.sqlite  # Commented out for SQLite
```

Create the database file:

```bash
touch database/database.sqlite
```

**Option B: MySQL**

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laracorekit
DB_USERNAME=root
DB_PASSWORD=your_password
```

---

### Step 5: Run Migrations & Seeders

```bash
php artisan migrate --seed
```

**Expected output:**
```
Migration table created successfully.
Migrating: 2024_01_01_000000_create_users_table
Migrated:  2024_01_01_000000_create_users_table (45.32ms)
...
Seeding: DatabaseSeeder
Seeded:  DatabaseSeeder (123.45ms)
Database seeding completed successfully.
```

This creates:
- Database tables
- Demo admin user
- Sample blog posts
- Default roles & permissions

---

### Step 6: Build Frontend Assets

```bash
npm run build
```

**Expected output:**
```
vite v5.0.0 building for production...
✓ 1234 modules transformed.
dist/assets/app-a1b2c3d4.css    123.45 kB
dist/assets/app-a1b2c3d4.js     456.78 kB
✓ built in 3.21s
```

---

### Step 7: Start Development Server

```bash
php artisan serve
```

**Expected output:**
```
   INFO  Server running on [http://127.0.0.1:8000].

  Press Ctrl+C to stop the server
```

---

##  Verify Installation

### 1. Visit the Homepage

Open in browser: **http://localhost:8000**

You should see the LaraCoreKit landing page.

---

### 2. Create Admin User

Open a **new terminal** and run:

```bash
php artisan filament:user
```

**Follow the prompts:**

```
 Name:
 > Admin User

 Email address:
 > admin@laracorekit.com

 Password:
 > **********

 Success! Admin user created.
```

---

### 3. Access Admin Panel

Visit: **http://localhost:8000/admin**

Login with:
- **Email:** admin@laracorekit.com
- **Password:** (what you set above)

You should see the Filament admin dashboard.

---

### 4. View UI Components

Visit: **http://localhost:8000/ui-showcase**

Explore all 175+ UI components organized by category.

---

## What You Just Installed

### Modules Included:

| Module | Description | Admin | Frontend |
|--------|-------------|-------|----------|
| **Core** | Module system, layouts, locale | - |  |
| **Auth** | Login, register, email verify |  |  |
| **User** | User profiles, roles |  |  |
| **Blog** | Multilingual blog system |  |  |
| **Settings** | Site configuration |  | API |
| **Media** | File uploads, gallery |  |  |

---

## Next Steps

### 1. Explore the Codebase

```bash
# View project structure
tree -L 2 -I 'vendor|node_modules'

# Or just explore in your code editor
code .
```

### 2. Understand the Module System

Read: **[Module System Guide](core/modules-system.md)**

This is LaraCoreKit's killer feature 

---

### 3. Create Your First Module

Follow: **[Create a Module](modules/create-module.md)**

Learn how to build a custom module step-by-step.

---

### 4. Customize the UI

- Check out the **[UI Components](frontend/ui-showcase.md)**
- Modify **[Layouts](frontend/layouts.md)**
- Learn **[Livewire Basics](frontend/livewire.md)**

---

### 5. Configure Settings

Visit: **http://localhost:8000/admin/settings**

Configure:
- Site name and description
- SEO defaults
- Supported languages
- Email settings

---

## Development Workflow

### Run in Development Mode

```bash
# Terminal 1: Laravel server
php artisan serve

# Terminal 2: Vite dev server (hot reload)
npm run dev
```

**Access at:** http://localhost:8000

Changes to CSS/JS will hot-reload automatically.

---

### Useful Commands

```bash
# Clear all caches
php artisan optimize:clear

# Run tests
php artisan test

# Format code (PSR-12)
./vendor/bin/pint

# Generate IDE helpers
php artisan ide-helper:generate

# Run migrations fresh
php artisan migrate:fresh --seed
```

---

## Troubleshooting

### Issue: "Class not found" errors

**Solution:**
```bash
composer dump-autoload
php artisan optimize:clear
```

---

### Issue: Permission denied on storage/logs

**Solution:**
```bash
chmod -R 775 storage bootstrap/cache
```

---

### Issue: Vite build fails

**Solution:**
```bash
rm -rf node_modules package-lock.json
npm install
npm run build
```

---

### Issue: Database connection failed

**Solution:**

1. Check `.env` database credentials
2. Ensure database server is running
3. For SQLite, verify file exists:
   ```bash
   touch database/database.sqlite
   ```

---

## Demo Credentials

If using the live demo:

**Website:** https://www.laracorekit.com/

**Admin Panel:** https://www.laracorekit.com/admin

Contact for demo credentials if needed.

---

## Get Help

- **[Full Documentation](introduction.md)**
- **[GitHub Issues](https://github.com/ProgrammerNomad/LaraCoreKit/issues)**

---

## What's Next?

Now that you have LaraCoreKit running:

1. **[Understand Project Structure →](project-structure.md)**
2. **[Learn Module System →](core/modules-system.md)** 
3. **[Create Your First Module →](modules/create-module.md)**

---

**Congratulations! You're ready to build something amazing.**

