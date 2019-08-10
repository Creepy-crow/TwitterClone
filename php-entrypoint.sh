#!/bin/sh

sleep 10
cd /var/web && php artisan migrate --seed

cd /tmp
crontab -l > mycron
echo "* * * * * cd /var/web && php artisan schedule:run >> /dev/null 2>&1" >> mycron
crontab mycron
rm mycron

php-fpm