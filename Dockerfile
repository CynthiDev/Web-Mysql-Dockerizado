FROM php:8.2-apache

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli

# Copiar tus archivos PHP 
COPY . /var/www/html/