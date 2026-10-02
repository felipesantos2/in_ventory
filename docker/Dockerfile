#
# https://docs.docker.com/guides/php/
# 

FROM php:8.5.11-fpm-alpine3.24

LABEL maintainer="<github.com/felipesantos2>"

WORKDIR /app

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apk update && apk add wget \
    openssl-dev \
    autoconf \
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
    postgresql-dev \
    --virtual .build-deps gcc g++ make \
    build-base

# https://codeigniter.com/user_guide/intro/requirements.html
RUN docker-php-ext-install intl gd pdo_mysql pdo_pgsql
