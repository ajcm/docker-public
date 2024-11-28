FROM scratch
ADD alpine-minirootfs-3.20.3-x86_64.tar.gz /

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
        mysql-client \
        ffmpeg
    
RUN wget https://github.com/yt-dlp/yt-dlp/releases/latest/download/yt-dlp -O /usr/bin/yt-dlp  && chmod 555 /usr/bin/yt-dlp


CMD ["/bin/bash"]



LABEL "com.example.vendor"="mail@armandomarques.com"
LABEL version="1.0"
LABEL description="Custom alpine 3.x image with dev tools."


