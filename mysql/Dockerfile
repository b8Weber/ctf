FROM php:5.6-fpm-alpine

COPY bpsql /tmp/
COPY bpsql/flag /flag


RUN sed -i 's/dl-cdn.alpinelinux.org/mirrors.ustc.edu.cn/g' /etc/apk/repositories \
    && apk add --update --no-cache nginx mysql mysql-client \
    && docker-php-source extract \
    && docker-php-ext-install mysql mysqli \
    && docker-php-source delete \
    && mysql_install_db --user=mysql --datadir=/var/lib/mysql \
    && sh -c 'mysqld_safe &' \
	&& sleep 2s \
    && mysqladmin -uroot password 'root' \
    && mysql -uroot -proot -e "source /tmp/ctf.sql;" \
    && mkdir /run/nginx \
    && mv /tmp/pushflag.sh /usr/local/bin/pushflag.sh \
    && mv /tmp/nginx.conf /etc/nginx/nginx.conf \
    && mv /tmp/vhost.nginx.conf /etc/nginx/conf.d/default.conf \
    && mv /tmp/src/* /var/www/html \
    && chmod +x /usr/local/bin/pushflag.sh \
    && chmod -R -w /var/www/html \
    && chown -R www-data:www-data /var/www/html \
    && rm -rf /tmp/* \
    && rm -rf /etc/apk

EXPOSE 8888

VOLUME ["/var/log/nginx"]

CMD ["/bin/sh", "-c", "pushflag.sh"]
