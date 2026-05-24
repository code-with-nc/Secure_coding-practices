FROM php:8.2-apache

# enable PHP session + basic extensions
RUN docker-php-ext-install fileinfo

# set working directory
WORKDIR /var/www/html

# copy project files
COPY . /var/www/html

# fix permissions
RUN chown -R www-data:www-data /var/www/html
