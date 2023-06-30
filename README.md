# Docker Images
### (For public access)

Docker repository: [https://hub.docker.com/u/ajcm](https://hub.docker.com/u/ajcm) 


**helloword** 

Test image with a static link hello word (made in C)

`docker run ajcm/helloworld:latest` 

**alpine-dev**

Image from alpine miniroot 3.x with build tools (unix, python, mysql)

`docker run  -it --rm ajcm/alpine3-dev:latest /bin/bash` 

**alpine-node**

Image with alpine 3.x with NodeJs 18 (from apk).

`docker run -it --rm ajcm/alpine-node`

**apache-php**

Apache 2.4 with php8 and adminer.

`docker run  -p8080:80 ajcm/apache-php:latest`

**apache-php-custom**

Custom Apache + php8 and custom scripts.

`docker run   -p 8080:80  ajcm/apache-php-custom:latest`



