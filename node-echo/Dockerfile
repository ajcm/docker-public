#docker build . -t ajcm/alpine_node
#docker run -d -p8080:8080 ajcm/alpine_node

FROM node:alpine

WORKDIR /usr/app

#install some dependencies
COPY ./package.json ./
RUN npm install
COPY . .

EXPOSE 8080

CMD ["npm","start"]
