## apache-php-custom

Custom: Apache + Php8.2 + Mysql cli + Utils

`docker build . -t ajcm/apache-php-custom:latest`

`docker push ajcm/apache-php-custom:latest`

`docker run   -p 8080:80  ajcm/apache-php-custom:latest`
OR
`docker run   -p 8080:80 -v "$PWD/www":/var/www/html ajcm/apache-php-custom:latest`


