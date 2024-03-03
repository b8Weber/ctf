FROM ubuntu:18.04
ENV DEBIAN_FRONTEND=noninteractive

# 初始 更换清华源/安装必备程序/建立账户/设置权限/初始flag内容
RUN sed -i "s/http:\/\/archive.ubuntu.com/http:\/\/mirrors.tuna.tsinghua.edu.cn/g" /etc/apt/sources.list && \
 sed -i "s/http:\/\/security.ubuntu.com/http:\/\/mirrors.tuna.tsinghua.edu.cn/g" /etc/apt/sources.list && \
 apt-get update && \
 apt-get install -y vim mysql-server-5.7 openjdk-8-jdk
COPY ./files/ctf.sql /
COPY ./files/run.sh /
COPY ./files/app /app

CMD ["bash","/run.sh"]
EXPOSE 80
