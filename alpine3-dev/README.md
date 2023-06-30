## alpine-dev

Custom alpine 3.x image with dev tools.

`docker build . -t ajcm/alpine3-dev:latest`

`docker run  -it --rm ajcm/alpine3-dev:latest /bin/bash`

`docker push  ajcm/alpine3-dev:latest`

### Build

base image: alpine-minirootfs-3.18.2-x86_64.tar.gz

<code>
ADD alpine-minirootfs-3.18.2-x86_64.tar.gz /

RUN apk add --no-cache --virtual .build-deps-full \
        binutils-gold \
        g++ \
        gcc \
        gnupg \
        libgcc \
        linux-headers \
        make \
        python3 \
        bash \
        curl \
        git  \
        mysql-client
</code>


