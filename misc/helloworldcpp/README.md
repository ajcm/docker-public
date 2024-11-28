## helloword

Test image with a static link hello word (made in C)

`docker build . -t ajcm/helloworld `

`docker push ajcm/helloworld`

`docker run --rm --name=helloworld ajcm/helloworld:latest`

### Build

`gcc -static -o  helloworld helloworld.c `


