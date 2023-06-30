## apache-php

Apache 2.4 with php8 and adminer.

`docker build . -t ajcm/apache-php:latest`

`docker push  ajcm/apache-php:latest`

`docker run  -p8080:80 ajcm/apache-php:latest`


###
entrypoint: http://localhost:8080/db/adminer.php

