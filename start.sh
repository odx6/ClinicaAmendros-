#!/usr/bin/env bash
echo "Corriendo composer"
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

echo "Configurando cache..."
php artisan config:cache

echo "limpiando rutas..."
php artisan route:cache

echo "Corriendo migraciones..."
php artisan migrate --force