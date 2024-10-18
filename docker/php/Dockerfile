FROM php:8.3.3-fpm

RUN apt-get -y update \
    && apt-get install -y libicu-dev libzip-dev git

RUN curl -sS https://getcomposer.org/installer | php -- \
--install-dir=/usr/bin --filename=composer

RUN docker-php-ext-install zip
