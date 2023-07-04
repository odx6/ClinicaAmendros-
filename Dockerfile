# Imagen base de PHP
FROM php:8.0-fpm

# Instalar dependencias del sistema operativo necesarias
RUN apt-get update && apt-get install -y \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Instalar extensiones de PHP requeridas
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Configurar el directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos de la aplicación al contenedor
COPY . .

# Instalar dependencias de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --no-scripts

# Configurar permisos de almacenamiento en caché y logs
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Generar clave de aplicación de Laravel
RUN php artisan key:generate

# Exponer el puerto 9000 para la comunicación con Nginx u otro servidor web
EXPOSE 9000

# Comando para ejecutar el contenedor
CMD ["php-fpm"]