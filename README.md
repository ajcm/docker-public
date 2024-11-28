# Docker Images

### Public access
Docker repository: [https://hub.docker.com/u/ajcm](https://hub.docker.com/u/ajcm) 

Git repository: [https://github.com/ajcm/docker-public](https://github.com/ajcm/docker-public)


**alpine-dev**

Image from alpine miniroot 3.x with build tools (unix, python, mysql)

`docker run  -it --rm ajcm/alpine3-dev:latest /bin/bash` 


**apache-php**

Apache 2.4 with php8 and adminer.

`docker run  -p8080:80 ajcm/apache-php:latest`



**node-express**

Latest alpine with express with "hello word"

`docker run -d -p8080:8080 ajcm/express-node`



**nginx**

Image with Nginx and context configuration.

`docker run -d -p 8080:80  ajcm/nginx:latest`


