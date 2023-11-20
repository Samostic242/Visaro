FROM php:8.1-fpm-alpine

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN apk --no-cache add libpng libpng-dev && docker-php-ext-install gd pdo pdo_mysql sockets
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /visaro_api_gateway
COPY . .

RUN composer update
RUN composer install
RUN php artisan l5-swagger:generate
RUN php artisan passport:install
RUN php artisan passport:keys --force
RUN php artisan config:cache
RUN php artisan cache:clear
