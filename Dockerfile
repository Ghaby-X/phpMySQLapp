FROM php:8.2-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Optional: enable Apache mod_rewrite
RUN a2enmod rewrite
