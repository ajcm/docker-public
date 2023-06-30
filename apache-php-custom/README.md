## apache-php-custom

Custom Apache + php8.

`docker build . -t ajcm/apache-php-custom:latest`

`docker pull ajcm/apache-php-custom:latest`

`docker run   -p 8080:80  ajcm/apache-php-custom:latest`
OR
`docker run   -p 8080:80 -v "$PWD/www":/var/www/html ajcm/apache-php-custom:latest`


