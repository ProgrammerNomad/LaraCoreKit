# Docker Deployment

**Estimated time:** 12 minutes  
**Difficulty:** Intermediate

---

LaraCoreKit supports containerized deployment with Docker, both for local development (via Laravel Sail) and production.

---

## Option 1: Laravel Sail (Development)

Laravel Sail is pre-configured for development containers.

```bash
# Install Sail
php artisan sail:install

# Start all services (MySQL, Redis, etc.)
./vendor/bin/sail up -d

# Run artisan commands inside container
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan queue:work

# Run composer inside container
./vendor/bin/sail composer require some/package

# Run npm inside container
./vendor/bin/sail npm run dev
```

---

## Option 2: Custom Docker Setup (Production)

### `Dockerfile`

```dockerfile
FROM php:8.3-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
    git curl zip unzip \
    libpng-dev libjpeg-dev libwebp-dev \
    icu-dev libzip-dev \
    && docker-php-ext-install \
        pdo_mysql mbstring zip bcmath \
        gd intl exif opcache

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Build frontend assets
COPY --from=node:20-alpine /usr/local/bin/node /usr/local/bin/node
COPY --from=node:20-alpine /usr/local/lib/node_modules /usr/local/lib/node_modules
COPY --from=node:20-alpine /usr/local/bin/npm /usr/local/bin/npm
RUN npm ci && npm run build && rm -rf node_modules

# Optimize Laravel
RUN php artisan optimize

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
```

### `docker-compose.yml`

```yaml
version: '3.8'

services:
  app:
    build:
      context: .
      dockerfile: Dockerfile
    restart: unless-stopped
    working_dir: /var/www/html
    volumes:
      - ./storage:/var/www/html/storage
      - ./.env:/var/www/html/.env
    depends_on:
      - db
      - redis
    networks:
      - laracorekit

  nginx:
    image: nginx:alpine
    restart: unless-stopped
    ports:
      - "80:80"
      - "443:443"
    volumes:
      - ./public:/var/www/html/public
      - ./docker/nginx.conf:/etc/nginx/conf.d/default.conf
      - /etc/letsencrypt:/etc/letsencrypt:ro
    depends_on:
      - app
    networks:
      - laracorekit

  db:
    image: mysql:8.0
    restart: unless-stopped
    environment:
      MYSQL_DATABASE: laracorekit
      MYSQL_USER: laracorekit
      MYSQL_PASSWORD: secret
      MYSQL_ROOT_PASSWORD: root_secret
    volumes:
      - db_data:/var/lib/mysql
    networks:
      - laracorekit

  redis:
    image: redis:7-alpine
    restart: unless-stopped
    volumes:
      - redis_data:/data
    networks:
      - laracorekit

  queue:
    build:
      context: .
      dockerfile: Dockerfile
    restart: unless-stopped
    command: php artisan queue:work redis --sleep=3 --tries=3
    environment:
      QUEUE_CONNECTION: redis
    depends_on:
      - db
      - redis
    networks:
      - laracorekit

volumes:
  db_data:
  redis_data:

networks:
  laracorekit:
    driver: bridge
```

---

## Nginx Config for Docker

```nginx
# docker/nginx.conf
server {
    listen 80;
    server_name _;
    root /var/www/html/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass app:9000;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

---

## Deploy Commands

```bash
# Build and start all containers
docker compose up -d --build

# Run migrations
docker compose exec app php artisan migrate --force

# Optimize
docker compose exec app php artisan optimize

# View logs
docker compose logs -f app

# Restart app container
docker compose restart app
```

---

## Next Steps

� **[Hosting Guide →](hosting)**
