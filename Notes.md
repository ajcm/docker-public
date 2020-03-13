# Notes for Docker




#### Mongo DB

docker network create net

docker run --network net -d -p 27017-27019:27017-27019 --name mongodb mongo:4.0.16

docker exec -it mongodb bash

docker run --network net  -d -e ME_CONFIG_MONGODB_SERVER=mongodb -p 8081:8081 mongo-express

### Postegres 

docker run --name some-postgres -e POSTGRES_PASSWORD=mysecretpassword -d postgres

### Mysql

docker run  --name=test-mysql --env="MYSQL_ROOT_PASSWORD=mypassword" mysql

Get password  from logs / set  password in docker variables:

docker logs mysql5.7  2>&1 | grep GENERATED


**Create image**

docker volume create --name mysqldata5.7 

docker run --name=mysql5.7  -v mysqldata5.7:/var/lib/mysql --env="MYSQL_ROOT_PASSWORD=mypassword" -d mysql/mysql-server:5.7.28-1.1.13

docker exec -it mysql5.7  mysql --host=localhost --user=root --password=mypassword 


**Backup and restore**

docker exec mysql5.7 /usr/bin/mysqldump -u root --password=mypassword computers > backup.sql

cat backup.sql | docker exec -i mysql5.7 /usr/bin/mysql -u root --password=mypassword computers



**Run SQL**

cat data.sql  | docker exec  -i  mysql5.7 /usr/bin/mysql -u user --password=password  computers

**Debug**
docker exec -it mysql5.7  /bin/bash

docker run -it -v mysqldata5.7:/tmp ubuntu:14.04 /bin/bash





**Links:**
https://dev.mysql.com/doc/refman/5.7/en/docker-mysql-getting-started.html
https://medium.com/better-programming/setting-up-mysql-database-in-a-docker-d6c69a3e9afe
https://hub.docker.com/r/mysql/mysql-server/tags/


### Jenkins

**Run Jenkins:**

docker run -p 8080:8080   -v /var/run/docker.sock:/var/run/docker.sock  --name jenkins jenkins/jenkins:lts

### Nginx
docker run -p 8080:80  -v /home/myself/docker/php/src:/var/www/html nginx:alpine

docker run -p 8080:80  -v /home/ajcm/git/react-material-ui:/usr/share/nginx/html:ro nginx:alpine

### Etc

**Check volumes:**

docker inspect -f '{{ .Mounts }}' containerid

docker run -it -v /tmp:/tmp ubuntu:14.04 /bin/bash






Armando Marques

 mail@armandomarques.com

