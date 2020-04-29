
### Mysql

$docker run -it --network some-network --rm mysql mysql -hsome-mysql -uexample-user -p

$ docker run  --name=test-mysql --env="MYSQL_ROOT_PASSWORD=mypassword" mysql

Get password  from logs / set  password in docker variables:

$ docker logs mysql5.7  2>&1 | grep GENERATED


**Create image**

$ docker volume create --name mysqldata5.7 

$ docker run --name=mysql5.7  -v mysqldata5.7:/var/lib/mysql --env="MYSQL_ROOT_PASSWORD=mypassword" -d mysql/mysql-server:5.7.28-1.1.13

$ docker exec -it mysql5.7  mysql --host=localhost --user=root --password=mypassword 


**Backup and restore**

$ docker exec mysql5.7 /usr/bin/mysqldump -u root --password=mypassword computers > backup.sql

$ cat backup.sql | docker exec -i mysql5.7 /usr/bin/mysql -u root --password=mypassword computers

**Run SQL**

$ cat data.sql  | docker exec  -i  mysql5.7 /usr/bin/mysql -u user --password=password  computers

**Debug**

$ docker exec -it mysql5.7  /bin/bash

$ docker run -it -v mysqldata5.7:/tmp ubuntu:14.04 /bin/bash

**Links:**

https://dev.mysql.com/doc/refman/5.7/en/docker-mysql-getting-started.html

https://medium.com/better-programming/setting-up-mysql-database-in-a-docker-d6c69a3e9afe

https://hub.docker.com/r/mysql/mysql-server/tags/

