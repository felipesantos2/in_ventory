FROM php:8.5.2-fpm-alpine3.22

LABEL maintainer="<github.com/felipesantos2>"

RUN apk update && apk add --no--cache \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    unzip \
    icu-dev \
    libxml2-dev \
    openssl-dev \
    libpq-dev \
    git \
    bash \
    curl \
    --virtual .build-deps gcc g++ make

RUN docker-php-ext-install gd pdo pdo_mysql

RUN apk add --no-cache postgresql-dev && docker-php-ext-install pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php --  --install-dir=/usr/local/bin --filename=composer

RUN chmod -R 777 .

# EXPOSE 8080

# CMD [ "php", "spark", "serve" ]
