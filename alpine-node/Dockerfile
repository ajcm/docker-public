#docker build .  -t ajcm/alpine-node8
#docker run -it ajcm/alpine-node8
#docker run -it --rm ajcm/alpine-node8

FROM ajcm/alpine3_7:latest

# install nodejs 8
RUN apk add --no-cache nodejs

CMD ["node"]

LABEL "com.example.vendor"="mail@armandomarques.com"
LABEL version="1.0"
LABEL description="alpine 3.7 with NodeJs8 (from apk)"

