#!/bin/bash
echo "flag_checker" > /flag
service mysql start
mysql < /ctf.sql
rm /ctf.sql
mysql -e "CREATE USER 'ctf'@'%' IDENTIFIED BY 'ctf'"
mysql -e "GRANT ALL ON my_blog_dev.* TO 'ctf'@'%'"
mysql -e "flush privileges"
mkdir /data
mkdir /opt
mkdir /opt/deploy
mkdir /opt/deploy/upload
java -jar /app/app.jar &
java -jar /app/ssrf.jar
if [ -f "/init.sh" ]; then
chmod +x /init.sh
/init.sh
fi
tail -f /dev/null

