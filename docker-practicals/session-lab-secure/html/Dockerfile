FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy app
COPY . /var/www/html/

EXPOSE 80
