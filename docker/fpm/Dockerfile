FROM php:8.1-fpm

# Install dependencies
RUN apt-get update \
  && apt-get install -y \
    libcurl4-gnutls-dev \
    libmagickwand-dev \
    libxml2 \
    cron \
    libfreetype6-dev \
    libicu-dev \
    libjpeg62-turbo-dev \
    libxslt1-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    ghostscript

# Install required PHP extensions
RUN docker-php-ext-install \
  gd \
  intl \
  mysqli \
  pdo_mysql \
  xsl \
  zip \
  soap \
  opcache \
  dom \
  curl \
  xml \
  simplexml \
  gettext \
  pcntl

RUN pecl install imagick

RUN docker-php-ext-enable imagick

RUN sed -i -- 's/;*\s*\(security\.limit_extensions\)\s*=.*$/\1 \= \.php \.xml/g' /usr/local/etc/php-fpm.d/www.conf

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x wp-cli.phar

RUN mv wp-cli.phar /usr/local/bin/wp
