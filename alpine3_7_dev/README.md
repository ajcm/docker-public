## alpine3.7-dev

Test image with a static link hello word (made in C)

`docker build . -t ajcm/alpine3.7-dev:latest`

`docker run  -it --rm ajcm/alpine3.7-dev:latest /bin/bash`

`docker push  ajcm/alpine3.7-dev:latest`

### Build

<code>
ADD alpine-minirootfs-3.7.3-x86_64.tar.gz /

RUN apk add --no-cache --virtual .build-deps-full \
        binutils-gold \
        g++ \
        gcc \
        gnupg \
        libgcc \
        linux-headers \
        make \
        python \
        bash \
        curl \
        git  \
        mysql-client
</code>


