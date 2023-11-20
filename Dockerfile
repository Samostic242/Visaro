FROM php:8.1-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql sockets
RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


WORKDIR /visaro_api_gateway
COPY . .
RUN composer install
RUN php artisan l5-swagger:generate
RUN php artisan passport:keys --force

