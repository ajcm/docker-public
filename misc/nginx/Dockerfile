FROM nginx:1.17.9-alpine

WORKDIR '/app'

COPY ./html/ ./html/

## copy conf
COPY ./default.conf /etc/nginx/conf.d/default.conf

EXPOSE 80

LABEL "com.example.vendor"="mail@armandomarques.com"
LABEL version="1.0"
LABEL description="Image with Nginx and context configuration."

