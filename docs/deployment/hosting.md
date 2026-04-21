# Hosting Guide

**Estimated time:** 8 minutes  
**Difficulty:** Beginner

---

## Recommended Hosting Providers

| Provider | Type | Best For | Starting Cost |
|----------|------|----------|--------------|
| **Laravel Cloud** | Managed | Easiest deployment | ~$5/mo |
| **Forge + VPS** | VPS Panel | Full control | ~$12/mo |
| **Ploi** | VPS Panel | Affordable alternative | ~$10/mo |
| **Railway** | PaaS | Fast hobby projects | Free tier |
| **Fly.io** | PaaS | Docker-based | Free tier |
| **DigitalOcean App** | PaaS | Simple setup | ~$12/mo |

---

## Option 1: Laravel Cloud (Easiest)

The official managed Laravel hosting platform.

```bash
# Install CLI
curl -fsSL https://cloud.laravel.com/installer.sh | sh

# Login
cloud login

# Deploy from your project root
cloud deploy
```

Laravel Cloud handles:
- Zero-downtime deployments
- Auto-scaling
- SSL certificates
- Queue workers
- Cron jobs

---

## Option 2: Forge + DigitalOcean

Best balance of control and automation.

### Step 1: Create a DigitalOcean Droplet

- Ubuntu 22.04 LTS
- At least 2GB RAM (4GB recommended)
- 2 vCPUs

### Step 2: Connect to Forge

1. Visit [forge.laravel.com](https://forge.laravel.com)
2. Add your server (DigitalOcean)
3. Forge SSH's in and configures PHP, Nginx, MySQL, Redis

### Step 3: Add Your Site

1. Add site: `laracorekit.com`
2. Connect GitHub repo
3. Click **Deploy Now**

### Step 4: Set Environment Variables

In Forge → Site → Environment → Edit `.env`:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://www.laracorekit.com
DB_DATABASE=laracorekit
DB_PASSWORD=your-secure-password
QUEUE_CONNECTION=redis
CACHE_DRIVER=redis
```

### Step 5: Deployment Script

```bash
cd /home/forge/laracorekit.com
git pull origin main
composer install --no-dev --optimize-autoloader
npm ci && npm run build
php artisan migrate --force
php artisan optimize
php artisan queue:restart
```

---

## Option 3: Railway

Great for quick deployments with zero server management.

```bash
# Install Railway CLI
npm install -g @railway/cli

# Login
railway login

# Initialize project
railway init

# Add services
railway add mysql
railway add redis

# Deploy
railway up
```

Set environment variables in the Railway dashboard.

---

## Option 4: Fly.io

Docker-based deployment with global edge distribution.

```bash
# Install flyctl
curl -L https://fly.io/install.sh | sh

# Login
fly auth login

# Initialize (creates fly.toml)
fly launch

# Deploy
fly deploy
```

**fly.toml** (based on your Dockerfile):
```toml
[build]
  dockerfile = "Dockerfile"

[env]
  APP_ENV = "production"

[[services]]
  protocol = "tcp"
  internal_port = 80
  [[services.ports]]
    port = 80
    handlers = ["http"]
  [[services.ports]]
    port = 443
    handlers = ["tls", "http"]
```

---

## SSL Certificates

### Using Let's Encrypt (Free)

```bash
# Install Certbot
sudo apt install certbot python3-certbot-nginx

# Issue certificate
sudo certbot --nginx -d laracorekit.com -d www.laracorekit.com

# Auto-renewal (runs twice daily)
sudo systemctl enable certbot.timer
```

---

## Next Steps

**[Performance Optimization →](optimization)**


