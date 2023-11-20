FROM php:8.2-fpm-alpine

RUN apk --no-cache add \
    $PHPIZE_DEPS \
    pdo \
    pdo_mysql \
    libressl-dev \
    openssl \
    sockets

RUN docker-php-ext-install pdo pdo_mysql sockets

RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer

WORKDIR /visaro_api_gateway
COPY . .
RUN composer install
RUN php artisan l5-swagger:generate
RUN php artisan passport:keys --force
