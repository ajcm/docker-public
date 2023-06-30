## alpine3.7-dev

Test image with a static link hello word (made in C)

`docker build .  -t ajcm/alpine-node`
`docker run -it ajcm/alpine-node`
`docker run -it --rm ajcm/alpine-node`

### Build

base image: alpine-minirootfs-3.7.3-x86_64.tar.gz

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


