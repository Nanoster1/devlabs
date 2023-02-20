FROM php:8.2.3-fpm

RUN apt-get update && apt-get install -y \
    curl \
    wget \
    git

COPY php.ini /usr/local/etc/php/conf.d/40-custom.ini
COPY src/devlabs.server /var/www/devlabs.server

WORKDIR /var/www/devlabs

CMD ["php-fpm"]
