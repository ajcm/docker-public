FROM scratch
ADD alpine-minirootfs-3.19.1-x86_64 /

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
    
   

CMD ["/bin/bash"]


LABEL "com.example.vendor"="mail@armandomarques.com"
LABEL version="1.0"
LABEL description="Custom alpine 3.x image with dev tools."


