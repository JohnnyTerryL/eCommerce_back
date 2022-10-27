FROM php:8.0-fpm
WORKDIR /app/

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    vim\
    php-pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY . ./
RUN chown -R www-data:www-data /var/www
RUN chmod 755 /var/www
