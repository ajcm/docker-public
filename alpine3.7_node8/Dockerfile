#docker build .  -t ajcm/alpine3.7-node8
#docker run -it ajcm/alpine3.7-node8
#docker run -it --rm ajcm/alpine3.7-node8:latest

FROM ajcm/alpine3.7-dev:latest

# install nodejs 8
RUN apk add --no-cache nodejs

CMD ["node"]

LABEL "com.example.vendor"="mail@armandomarques.com"
LABEL version="1.0"
LABEL description="alpine 3.7 with NodeJs8 (from apk)"

