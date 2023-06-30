## nginx + https

Nginx + https config

`docker run  -v"$PWD"/conf.d:/etc/nginx/conf.d/ -v"$PWD"/www:/var/www/html -p80:80 -p443:443 nginx:1.17-alpine `


