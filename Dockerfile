FROM php:8.2-apache

# Install extensions and configure Apache
RUN docker-php-ext-install mysqli && \
    a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Set environment variables
ENV DB_SERVERNAME=owbyproject.c1wke6cc8q8b.eu-west-1.rds.amazonaws.com \
    DB_NAME=book_movie_db \
    DB_PASSWORD=password123

# Copy application files 
COPY . .

# Expose port
EXPOSE 80