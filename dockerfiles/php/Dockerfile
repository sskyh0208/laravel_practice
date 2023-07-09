FROM php:8.2-fpm-buster

ENV TZ=Asia/Tokyo \
    COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_HOME=/composer

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
    apt-get -y install git libicu-dev libzip-dev libonig-dev unzip && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* && \
    mkdir /var/run/php-fpm && \
    docker-php-ext-install intl pdo_mysql zip bcmath

COPY ./php-fpm.d/www.conf /usr/local/etc/php-fpm.d/www.conf
COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /work/src