# edu-tju-lms

部署步骤

# replace /var/www to your derectory

cd /var/www/edu-tju-lms 

composer install

php artisan migrate

php artisan key:generate

cd /var/www/edu-tju-lms/public

php -S 0.0.0.0:1024

visit 127.0.0.1:1024/home

