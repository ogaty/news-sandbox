FROM php:7.4-fpm
RUN apt-get update

RUN apt-get update && apt-get install -y \
        libssl-dev \
        libicu-dev \
        libzip-dev \
        libonig-dev \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
  && docker-php-ext-install -j$(nproc) iconv pdo_mysql mysqli intl zip pcntl \
  && docker-php-ext-configure gd --enable-gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
  && docker-php-ext-install -j$(nproc) gd exif \
  && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && php composer-setup.php \
  && php -r "unlink('composer-setup.php');" \
  && mv composer.phar /usr/local/bin/composer \
#COPY php.ini /usr/local/etc/php/php.ini
