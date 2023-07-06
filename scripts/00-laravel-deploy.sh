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
echo "ever Caching routes..."
php artisan view:cache

echo "ever Running migrations..."
php artisan migrate --force
echo "ever corriendo los seeders..."
php artisan db:seed
yes | ./00-laravel-deploy.sh