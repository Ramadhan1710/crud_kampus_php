# Gunakan PHP versi 8.2 dengan Apache
FROM php:8.2-apache

# Salin semua file dari folder src ke folder web di container
COPY src/ /var/www/html/

# Install ekstensi mysqli agar PHP bisa konek ke MySQL
# RUN docker-php-ext-install mysqli
RUN docker-php-ext-install mysqli pdo pdo_mysql

EXPOSE 80