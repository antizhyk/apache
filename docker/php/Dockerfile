FROM php:7.4-apache

RUN groupadd --gid=1000 dev  
RUN useradd -u 1000 -N -G www-data --gid=1000 -s /bin/bash -m dev
RUN docker-php-ext-install mysqli

