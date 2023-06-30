#docker build . -t ajcm/alpine3.7-dev:latest
#docker run  -it --rm ajcm/alpine3.7-dev:latest /bin/bash
#docker push  ajcm/alpine3.7-dev:latest


FROM scratch
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
    
   

CMD ["/bin/bash"]


LABEL "com.example.vendor"="mail@armandomarques.com"
LABEL version="1.0"
LABEL description="Custom alpine 3.7 image with dev tools."


