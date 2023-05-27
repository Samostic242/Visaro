FROM php:7.4-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql sockets
RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer

WORKDIR /visaro_api_gateway
COPY . .
RUN composer install
RUN php artisan l5-swagger:generate
RUN php artisan passport:keys --force

