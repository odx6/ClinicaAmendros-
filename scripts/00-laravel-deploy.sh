#!/usr/bin/env bash
echo "corriendo Running composer"
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

echo " corriendo Caching config..."
php artisan config:cache

echo "ever Caching routes..."
php artisan route:cache

echo "ever Running migrations..."
php artisan migrate --force