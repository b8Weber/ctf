# 使用Ubuntu作为基础镜像
FROM ubuntu:20.04


# 将工作目录设为 /var/www/html
WORKDIR /var/www/html

# 复制当前目录下的所有文件到容器的 /var/www/html 目录中
COPY ./src /var/www/html



# 目录端口
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80", "-t", "."]