FROM wordpress:latest

USER root

RUN apt-get update && apt-get install -y --no-install-recommends \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        locales \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(getconf nproc) gd pdo_mysql \
    && localedef -i en_US -c UTF-8 en_US.UTF-8

USER www-data