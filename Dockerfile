FROM php:8.2-apache

# Install extensions and configure Apache
RUN docker-php-ext-install mysqli && \
    a2enmod rewrite && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /var/www/html

# Copy application files 
COPY . .

# Expose port
EXPOSE 80