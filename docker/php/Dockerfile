FROM ubuntu:20.04
RUN apt-get update && apt-get install -y init && apt-get clean all

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update \
    && apt-get install -y curl vim git

RUN apt-get -y install php7.4 php7.4-fpm php7.4-mysql php7.4-mbstring php7.4-zip
RUN mkdir -p /run/php7.4-fpm
RUN useradd nginx

WORKDIR /var/www/

# add alias
RUN echo "" >> ~/.bashrc
RUN echo "alias ll='ls -l'" >> ~/.bashrc