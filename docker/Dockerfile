FROM php:apache-buster
RUN a2enmod rewrite
COPY src/ /var/www/html/
RUN sed -i 's_/pvpoketw/src/_/_g' /var/www/html/modules/config.php
