
FROM ubuntu:22.04

# Install dependencies
RUN apt -y update
RUN apt -y install ffmpeg
RUN apt -y install detox
RUN apt -y install curl wget
RUN apt -y install zip
RUN apt -y install python3

# aws cli
RUN curl "https://awscli.amazonaws.com/awscli-exe-linux-x86_64.zip" -o "/tmp/awscliv2.zip"
RUN cd /tmp && unzip awscliv2.zip && ./aws/install

# yt dlp
RUN wget https://github.com/yt-dlp/yt-dlp/releases/latest/download/yt-dlp -O /usr/bin/yt-dlp  
RUN chmod 555 /usr/bin/yt-dlp

COPY download-yt-audio.sh /

CMD ["/bin/bash"]
