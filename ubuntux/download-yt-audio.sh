echo "download ($1) to ($2)"

rm -rf /tmp/*
yt-dlp --write-thumbnail  --audio-quality 10  -x  --audio-format mp3 -P /tmp  https://www.youtube.com/watch?v=$1 
detox /tmp/*
aws s3 sync /tmp s3://$2

