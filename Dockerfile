# Stage 1: Build stage
FROM php:8.2-fpm-alpine AS build

# Install build dependencies and necessary packages
RUN apk --no-cache add \
    $PHPIZE_DEPS \
    autoconf \
    dpkg-dev \
    dpkg \
    file \
    g++ \
    gcc \
    libc-dev \
    make \
    pkgconf \
    re2c \
    openssl-dev

# Install pdo, pdo_mysql, and sockets
RUN apk --no-cache add \
    php8-pdo \
    php8-pdo_mysql \
    php8-sockets && \
    rm -rf /var/cache/apk/*

# Stage 2: Final stage
FROM nginx:alpine

# Copy PHP-FPM configuration from build stage
COPY --from=build /usr/local/etc/php-fpm.d/ /usr/local/etc/php-fpm.d/

# Copy necessary files from the build stage
COPY --from=build /usr/local/lib/php/extensions/ /usr/local/lib/php/extensions/

# Copy Nginx configuration
COPY nginx.conf /etc/nginx/nginx.conf

# Set up your PHP application
WORKDIR /visaro_api_gateway
COPY . .

# Continue with the rest of your Dockerfile
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer

RUN composer install
RUN php artisan l5-swagger:generate
RUN php artisan passport:keys --force
