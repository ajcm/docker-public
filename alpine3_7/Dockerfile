#docker build . -t ajcm/alpine3_7:latest
#docker run  -it --rm ajcm/alpine3_7:latest /bin/bash
#docker push  ajcm/alpine3_7:latest


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
LABEL description="Custom alpinex6 image with dev tools"


