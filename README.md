# Docker Images
### (For public access)

Docker repository: [https://hub.docker.com/u/ajcm](https://hub.docker.com/u/ajcm) 


**helloword** 
Test image with a static link hello word (made in C)
`docker run ajcm/helloworld:latest` 

**alpine3.7_dev** 
Image from alpine miniroot fs 3.7 with build tools
(unix, python, mysql)
`docker run  -it --rm ajcm/alpine3.7-dev:latest /bin/bash` 

- **alpine3.7_node8**: image from alpine3.7_dev with node8 installed with apk

- **alpine_nginx1.17**: vanila alpine with nginx, custom configuration in config

- **alpine_php7.3**: alpine running a php deamon, can be used as server







Armando Marques
 mail@armandomarques.com
