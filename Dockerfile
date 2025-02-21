FROM php:8.2-fpm

# Installer les dépendances système nécessaires (si besoin)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev

# Installer les extensions PHP, dont pdo_mysql
RUN docker-php-ext-install pdo pdo_mysql

# Installer Composer, etc.
RUN apt-get install -y curl unzip git \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer
