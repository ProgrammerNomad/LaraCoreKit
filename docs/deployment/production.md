# Production Setup

**Estimated time:** 15 minutes  
**Difficulty:** Intermediate

---

This guide covers what you need to do to deploy LaraCoreKit to a live production server safely and efficiently.

---

## Pre-Deployment Checklist

Before going live, verify:

- [ ] `APP_ENV=production`
- [ ] `APP_DEBUG=false`
- [ ] `APP_URL` set to your real domain
- [ ] Database configured with a strong password
- [ ] Mail configured (Mailgun, SES, Postmark)
- [ ] Storage configured (local or S3)
- [ ] Queue worker running (Redis recommended)
- [ ] HTTPS certificate installed (Let's Encrypt)
- [ ] File permissions set correctly

---

## Environment Variables

```env
APP_NAME="My App"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com
APP_KEY=base64:...  # Generate with: php artisan key:generate

LOG_CHANNEL=stack
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laracorekit_prod
DB_USERNAME=dbuser
DB_PASSWORD=very_secure_password_here

BROADCAST_DRIVER=log
CACHE_DRIVER=redis
FILESYSTEM_DISK=local
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PORT=6379
REDIS_PASSWORD=null

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailgun.org
MAIL_PORT=587
MAIL_USERNAME=your@mailgun.org
MAIL_PASSWORD=your-mailgun-key
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"
```

---

## Deployment Script

```bash
#!/bin/bash
set -e

# Navigate to app
cd /var/www/laracorekit

# Pull latest code
git pull origin main

# Install/update PHP dependencies
composer install --no-dev --optimize-autoloader --no-interaction

# Install/build frontend
npm ci && npm run build

# Cache everything
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

# Run migrations
php artisan migrate --force

# Create storage symlink (if not exists)
php artisan storage:link

# Restart queue workers
php artisan queue:restart

echo " Deployment complete!"
```

Make it executable:
```bash
chmod +x deploy.sh
./deploy.sh
```

---

## Nginx Configuration

```nginx
server {
    listen 80;
    listen 443 ssl http2;
    server_name yourdomain.com www.yourdomain.com;
    root /var/www/laracorekit/public;
    index index.php;

    ssl_certificate     /etc/letsencrypt/live/yourdomain.com/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/yourdomain.com/privkey.pem;

    # Redirect HTTP to HTTPS
    if ($scheme != "https") {
        return 301 https://$server_name$request_uri;
    }

    # Gzip Compression
    gzip on;
    gzip_types text/plain text/css application/json application/javascript;

    # Browser caching for assets
    location ~* \.(js|css|png|jpg|jpeg|gif|ico|svg|woff|woff2)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
        try_files $uri =404;
    }

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\. {
        deny all;
    }
}
```

---

## File Permissions

```bash
# Set correct ownership
sudo chown -R www-data:www-data /var/www/laracorekit

# Set permissions
sudo find /var/www/laracorekit -type f -exec chmod 644 {} \;
sudo find /var/www/laracorekit -type d -exec chmod 755 {} \;

# Storage and cache dirs need write access
sudo chmod -R 775 /var/www/laracorekit/storage
sudo chmod -R 775 /var/www/laracorekit/bootstrap/cache
```

---

## Queue Worker (Supervisor)

```ini
; /etc/supervisor/conf.d/laracorekit-queue.conf
[program:laracorekit-queue]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/laracorekit/artisan queue:work redis --sleep=3 --tries=3 --max-time=3600
autostart=true
autorestart=true
stopasgroup=true
killasgroup=true
user=www-data
numprocs=2
redirect_stderr=true
stdout_logfile=/var/log/laracorekit-queue.log
stopwaitsecs=3600
```

```bash
supervisorctl reread
supervisorctl update
supervisorctl start laracorekit-queue:*
```

---

## Scheduled Tasks (Cron)

```cron
* * * * * www-data php /var/www/laracorekit/artisan schedule:run >> /dev/null 2>&1
```

Add via:
```bash
crontab -e -u www-data
```

---

## Next Steps

� **[Docker →](docker)**
