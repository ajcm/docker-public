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

**alpine_nginx1.17**

vanila alpine with nginx, custom configuration in config

**alpine_php7.3**

alpine running a php deamon, can be used as server







Armando Marques
 mail@armandomarques.com
