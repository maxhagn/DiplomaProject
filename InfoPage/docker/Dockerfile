FROM php:8.2-fpm

RUN apt-get update -y \
    && apt-get install -y nginx gettext-base

COPY ./website /var/www/html/
COPY ./docker/nginx.conf.template /etc/nginx/conf.d/default.conf.template
COPY ./docker/entrypoint.sh /etc/entrypoint.sh
RUN chmod +x /etc/entrypoint.sh

EXPOSE ${PORT}

ENTRYPOINT ["sh", "/etc/entrypoint.sh"]