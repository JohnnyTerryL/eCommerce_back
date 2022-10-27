FROM php:8.0-fpm-alpine
WORKDIR /app/

RUN docker-php-ext-install pdo pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY . ./
RUN composer install --ignore-platform-reqs
RUN php artisan migrate
RUN php artisan key:generate
RUN chown -R www-data:www-data /var/www
RUN chmod 755 /var/www
