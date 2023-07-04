#!/usr/bin/env bash
echo "corriendo Running composer"
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html
composer show 
echo " corriendo Caching config..."
php artisan config:cache

echo "Limpiar las rutas"
php artisan cache:clear
echo "ever Caching routes..."
php artisan route:cache

echo "ever Running migrations..."
php artisan migrate --force