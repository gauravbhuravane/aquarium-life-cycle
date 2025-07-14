# Use an official PHP‑Apache image
FROM php:8.2-apache

# --------------------------------------------------
# 👇 install the MySQLi and PDO‑MySQL extensions
# --------------------------------------------------
RUN docker-php-ext-install mysqli pdo_mysql

# (optional) enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy project files
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
