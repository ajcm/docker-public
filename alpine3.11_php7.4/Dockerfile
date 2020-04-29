#docker  build . -t ajcm/alpine3.11-php7.4
#docker run -d -p8080:8080 ajcm/alpine3.11-php7.4

FROM php:7.4.5-alpine3.11

RUN	echo "upload_max_filesize = 128M" >> /usr/local/etc/php/conf.d/0-upload_large_dumps.ini \
&&	echo "post_max_size = 128M" >> /usr/local/etc/php/conf.d/0-upload_large_dumps.ini \
&&	echo "memory_limit = 1G" >> /usr/local/etc/php/conf.d/0-upload_large_dumps.ini \
&&	echo "max_execution_time = 600" >> /usr/local/etc/php/conf.d/0-upload_large_dumps.ini \
&&	echo "max_input_vars = 5000" >> /usr/local/etc/php/conf.d/0-upload_large_dumps.ini

STOPSIGNAL SIGINT

RUN	addgroup -S adminer \
&&	adduser -S -G adminer adminer \
&&	mkdir -p /var/www/html \
&&	mkdir -p /var/www/html/plugins-enabled \
&&	chown -R adminer:adminer /var/www/html


RUN	set -x \
&&	apk add --no-cache --virtual .build-deps \
	postgresql-dev \
	sqlite-dev

RUN docker-php-ext-install pdo_mysql pdo_pgsql pdo_sqlite mysqli
RUN	apk add --no-cache libpq
RUN	apk add --no-cache curl
RUN	apk add --no-cache bash


WORKDIR /var/www/html
COPY	./html/ .


USER	adminer
CMD	[ "php", "-S", "[::]:8080", "-t", "/var/www/html" ]

EXPOSE 8080

LABEL "com.example.vendor"="mail@armandomarques.com"
LABEL version="1.0"
LABEL description="php7.4 interpreter running on alpine3.11"
