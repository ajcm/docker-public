#docker build . -t ajcm/alpine-nginx1.17:latest
#docker run -d -p 8080:80  ajcm/alpine-nginx:latest

FROM nginx:1.17.9-alpine

WORKDIR '/app'

COPY ./html/ ./html/

## copy conf
COPY ./default.conf /etc/nginx/conf.d/default.conf


EXPOSE 80
