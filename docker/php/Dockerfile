FROM php:7.4-apache

RUN mkdir /var/www/workdir
RUN groupadd --gid=1000 dev  
RUN useradd -u 1000 -N -G www-data --gid=1000 -s /bin/bash -m dev
RUN apt-get update -y
RUN apt install apache2-utils -y
RUN a2enmod rewrite
RUN a2enmod headers
RUN a2enmod expires
# RUN apt-get install supervisor

# RUN chmod u+x /tmp/entrypoint.sh
# RUN chgrp www-data /var/www/workdir

