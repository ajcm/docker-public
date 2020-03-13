#docker build . -t ajcm/helloworld 
#docker push ajcm/helloworld
#docker run --rm --name=helloworld ajcm/helloworld:latest

FROM scratch
COPY ./ ./
CMD ["/helloworld"]


LABEL "com.example.vendor"="mail@armandomarques.com"
LABEL version="1.0"
LABEL description="Hello world image with static linked command"

