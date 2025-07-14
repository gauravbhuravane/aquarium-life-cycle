# Use an official PHP-Apache image
FROM php:8.2-apache

# Copy all files into the container
COPY . /var/www/html/

# Set permissions (optional but useful)
RUN chown -R www-data:www-data /var/www/html

# Enable Apache mod_rewrite (optional, for clean URLs)
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80
