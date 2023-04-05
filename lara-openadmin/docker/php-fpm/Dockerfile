FROM php:8.2-fpm
RUN apt-get update

RUN apt-get update && apt-get install -y \
        libssl-dev \
        libicu-dev \
        libzip-dev \
        libonig-dev \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        default-mysql-client \
  && docker-php-ext-install -j$(nproc) iconv pdo_mysql mysqli intl zip pcntl \
  && docker-php-ext-configure gd --enable-gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
  && docker-php-ext-install -j$(nproc) gd exif
RUN apt-get install -y \
        vim less
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && php composer-setup.php \
  && php -r "unlink('composer-setup.php');" \
  && mv composer.phar /usr/local/bin/composer

