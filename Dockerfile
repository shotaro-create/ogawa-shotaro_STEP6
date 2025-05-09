FROM php:8.3.20-apache

COPY contact.php /var/www/html/
COPY confirm.php /var/www/html/
COPY send.php /var/www/html/