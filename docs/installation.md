# Installation

---
**Supported Stack:** Laravel 13 / Filament 5 / Livewire 4 / Tailwind 4  
**Last Updated:** April 22, 2026  
**Estimated Time:** 10 minutes  
**Difficulty:** Beginner
---

This guide covers detailed installation instructions for LaraCoreKit in various environments.

---

## System Requirements

### Minimum Requirements

- **PHP:** 8.3 or higher
- **Composer:** 2.0 or higher
- **Node.js:** 18.0 or higher
- **Database:** MySQL 8.0+, PostgreSQL 13+, or SQLite 3.35+
- **Web Server:** Apache 2.4+ or Nginx 1.20+
- **Memory:** 512MB RAM minimum, 1GB recommended

### PHP Extensions Required

Ensure these PHP extensions are enabled:

```bash
php -m | grep -E "openssl|pdo|mbstring|tokenizer|xml|ctype|json|bcmath|curl|fileinfo|gd"
```

Required extensions:
- OpenSSL
- PDO
- Mbstring
- Tokenizer
- XML
- Ctype
- JSON
- BCMath
- cURL
- Fileinfo
- GD or Imagick (for image processing)

---

## Installation Methods

Choose the method that fits your environment:

- [Local Development](#local-development) (Recommended for beginners)
- [Docker Setup](#docker-setup) (Isolated environment)
- [Production Server](#production-server) (Deployment-ready)

---

## Local Development

### 1. Clone Repository

```bash
git clone https://github.com/ProgrammerNomad/LaraCoreKit.git
cd LaraCoreKit
```

### 2. Install PHP Dependencies

```bash
composer install
```

If you encounter memory issues:

```bash
COMPOSER_MEMORY_LIMIT=-1 composer install
```

### 3. Install JavaScript Dependencies

```bash
npm install
```

Or using Yarn:

```bash
yarn install
```

### 4. Environment Configuration

Copy the example environment file:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

### 5. Database Configuration

#### Option A: SQLite (Easiest)

Edit `.env`:

```env
DB_CONNECTION=sqlite
# Comment out or remove these:
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laracorekit
# DB_USERNAME=root
# DB_PASSWORD=
```

Create the database file:

```bash
# Windows
type nul > database\database.sqlite

# macOS/Linux
touch database/database.sqlite
```

#### Option B: MySQL

Create a database:

```sql
CREATE DATABASE laracorekit CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Edit `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laracorekit
DB_USERNAME=root
DB_PASSWORD=your_password
```

#### Option C: PostgreSQL

Create a database:

```sql
CREATE DATABASE laracorekit ENCODING 'UTF8';
```

Edit `.env`:

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=laracorekit
DB_USERNAME=postgres
DB_PASSWORD=your_password
```

### 6. Run Migrations

```bash
php artisan migrate --seed
```

This will:
- Create all database tables
- Seed default roles and permissions
- Create sample blog posts
- Create demo users (if configured)

### 7. Build Frontend Assets

For development with hot reload:

```bash
npm run dev
```

For production build:

```bash
npm run build
```

### 8. Create Admin User

```bash
php artisan filament:user
```

Follow the prompts to create your admin account.

### 9. Start Development Server

```bash
php artisan serve
```

Access at: **http://localhost:8000**

---

## Docker Setup

LaraCoreKit includes Docker support via Laravel Sail.

### 1. Install Docker

Download and install Docker Desktop:
- **Windows:** https://docs.docker.com/desktop/windows/install/
- **macOS:** https://docs.docker.com/desktop/mac/install/
- **Linux:** https://docs.docker.com/engine/install/

### 2. Install Dependencies

First, install Composer dependencies using a temporary Docker container:

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

### 3. Start Sail

```bash
./vendor/bin/sail up -d
```

This starts:
- PHP 8.3 with Laravel
- MySQL 8.0
- Redis
- Mailhog (email testing)

### 4. Setup Environment

```bash
cp .env.example .env
./vendor/bin/sail artisan key:generate
```

### 5. Run Migrations

```bash
./vendor/bin/sail artisan migrate --seed
```

### 6. Install JavaScript Dependencies

```bash
./vendor/bin/sail npm install
./vendor/bin/sail npm run build
```

### 7. Create Admin User

```bash
./vendor/bin/sail artisan filament:user
```

### 8. Access Application

- **Application:** http://localhost
- **Admin Panel:** http://localhost/admin
- **Mailhog:** http://localhost:8025

### Sail Aliases

Add to your shell profile (`~/.bashrc` or `~/.zshrc`):

```bash
alias sail='./vendor/bin/sail'
```

Then use:

```bash
sail up -d
sail artisan migrate
sail npm run dev
```

---

## Production Server

### 1. Server Setup

Install required software on Ubuntu/Debian:

```bash
# Update system
sudo apt update && sudo apt upgrade -y

# Install PHP 8.3
sudo add-apt-repository ppa:ondrej/php
sudo apt install php8.3-fpm php8.3-cli php8.3-mysql php8.3-pgsql \
    php8.3-xml php8.3-mbstring php8.3-curl php8.3-zip \
    php8.3-gd php8.3-bcmath php8.3-intl

# Install Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

# Install Node.js 18
curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash -
sudo apt install -y nodejs

# Install MySQL
sudo apt install mysql-server

# Install Nginx
sudo apt install nginx
```

### 2. Clone and Configure

```bash
cd /var/www
sudo git clone https://github.com/ProgrammerNomad/LaraCoreKit.git
cd LaraCoreKit

# Install dependencies (production)
composer install --no-dev --optimize-autoloader
npm install --production
npm run build

# Setup environment
cp .env.example .env
php artisan key:generate

# Set permissions
sudo chown -R www-data:www-data /var/www/LaraCoreKit
sudo chmod -R 755 /var/www/LaraCoreKit
sudo chmod -R 775 /var/www/LaraCoreKit/storage
sudo chmod -R 775 /var/www/LaraCoreKit/bootstrap/cache
```

### 3. Environment Configuration

Edit `.env` for production:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://www.laracorekit.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=laracorekit_prod
DB_USERNAME=laracorekit_user
DB_PASSWORD=secure_password_here

CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis

MAIL_MAILER=smtp
MAIL_HOST=smtp.laracorekit.com
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password
```

### 4. Database Setup

```bash
# Create production database
mysql -u root -p << EOF
CREATE DATABASE laracorekit_prod CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'laracorekit_user'@'localhost' IDENTIFIED BY 'secure_password_here';
GRANT ALL PRIVILEGES ON laracorekit_prod.* TO 'laracorekit_user'@'localhost';
FLUSH PRIVILEGES;
EOF

# Run migrations
php artisan migrate --force
```

### 5. Nginx Configuration

Create `/etc/nginx/sites-available/laracorekit`:

```nginx
server {
    listen 80;
    server_name www.laracorekit.com laracorekit.com;
    root /var/www/LaraCoreKit/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

Enable site:

```bash
sudo ln -s /etc/nginx/sites-available/laracorekit /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl restart nginx
```

### 6. SSL Certificate (Let's Encrypt)

```bash
sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d laracorekit.com -d www.laracorekit.com
```

### 7. Setup Supervisor (Queue Worker)

Create `/etc/supervisor/conf.d/laracorekit-worker.conf`:

```ini
[program:laracorekit-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/LaraCoreKit/artisan queue:work --sleep=3 --tries=3 --max-time=3600
autostart=true
autorestart=true
stopasgroup=true
killasgroup=true
user=www-data
numprocs=4
redirect_stderr=true
stdout_logfile=/var/www/LaraCoreKit/storage/logs/worker.log
stopwaitsecs=3600
```

Start supervisor:

```bash
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start laracorekit-worker:*
```

### 8. Setup Cron

Add to crontab (`sudo crontab -e -u www-data`):

```bash
* * * * * cd /var/www/LaraCoreKit && php artisan schedule:run >> /dev/null 2>&1
```

### 9. Optimize for Production

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

---

## Post-Installation

### Verify Installation

```bash
# Check Laravel version
php artisan --version

# Check installed modules
php artisan module:list

# Run health checks
php artisan about
```

### Create Admin User

```bash
php artisan filament:user
```

### Configure Settings

1. Login to admin panel: `/admin`
2. Navigate to Settings
3. Configure:
   - Site name and description
   - SEO defaults
   - Supported languages
   - Email settings

---

## Troubleshooting

### Composer Install Fails

```bash
# Clear Composer cache
composer clear-cache

# Install with verbose output
composer install -vvv
```

### Permission Issues

```bash
# Linux/macOS
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Or if you're the owner
chmod -R 775 storage bootstrap/cache
chown -R $USER:www-data storage bootstrap/cache
```

### Database Connection Errors

```bash
# Test database connection
php artisan db:show

# Clear config cache
php artisan config:clear
```

### Module Not Loading

```bash
# Clear all caches
php artisan optimize:clear

# Dump autoload
composer dump-autoload

# Check module config
php artisan config:show modules
```

---

## Next Steps

 Installation complete! Now:

1. **[Explore Project Structure →](project-structure.md)**
2. **[Learn Module System →](core/modules-system.md)** 
3. **[Configure Settings →](features/settings.md)**

---

## Get Help

- **[Documentation](introduction.md)**
- **[GitHub Issues](https://github.com/ProgrammerNomad/LaraCoreKit/issues)**


