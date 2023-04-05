FROM ruby:3.2.2
RUN apt-get update

RUN apt-get update && apt-get install -y \
        libssl-dev \
        libicu-dev \
        libzip-dev \
        libonig-dev

RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash
RUN apt-get install -y nodejs
RUN npm install --global yarn
RUN apt-get install -y vim

WORKDIR /root

CMD [ "tail", "-f", "/dev/null" ]
