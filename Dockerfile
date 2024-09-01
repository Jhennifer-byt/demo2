FROM php:8.1-apache

# Instalar dependencias necesarias para PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo_pgsql

# Copiar contenido de toda la app en mi contenedor
COPY . /var/www/html/

# Exponer el puerto 80
EXPOSE 80
