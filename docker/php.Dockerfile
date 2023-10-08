FROM php:fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-enable pdo_mysql


EXPOSE 9000