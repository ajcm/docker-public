FROM node:alpine

WORKDIR /usr/app

#install some dependencies
COPY ./package.json ./
RUN npm install
COPY . .

EXPOSE 8080

CMD ["npm","start"]


LABEL "com.example.vendor"="mail@armandomarques.com"
LABEL version="1.0"
LABEL description="Express node image with echo."
