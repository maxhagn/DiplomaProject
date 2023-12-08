#!/bin/bash
php-fpm &
rm -f /var/www/html/index.nginx-debian.html
envsubst '$PORT' </etc/nginx/conf.d/default.conf.template >/etc/nginx/conf.d/default.conf
nginx -g 'daemon off;'
