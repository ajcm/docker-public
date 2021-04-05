#docker  build . -t ajcm/alpine3.11-php7.4

FROM php:7.4.5-fpm-alpine3.11


RUN	set -x \
&&	apk add --no-cache --virtual .build-deps \
	postgresql-dev \
	sqlite-dev

RUN docker-php-ext-install pdo_mysql pdo_pgsql pdo_sqlite mysqli

RUN	apk add --no-cache libpq curl bash


LABEL "com.example.vendor"="mail@armandomarques.com"
LABEL version="1.0"
LABEL description="php7.4 interpreter running on alpine3.11"
