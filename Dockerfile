# Stage 1: Build stage
FROM php:8.2-fpm-alpine AS build

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
    openssl-dev \
    libressl-dev

# Install pdo, pdo_mysql, and sockets
RUN apk --no-cache add \
    pdo \
    pdo_mysql \
    sockets

# Stage 2: Final stage
FROM php:8.2-fpm-alpine

# Copy necessary files from the build stage
COPY --from=build /usr/local/lib/php/extensions/ /usr/local/lib/php/extensions/

# Continue with the rest of your Dockerfile
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer

WORKDIR /visaro_api_gateway
COPY . .

RUN composer install
RUN php artisan l5-swagger:generate
RUN php artisan passport:keys --force
