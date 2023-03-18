FROM ruby:3.2
RUN apt-get update

RUN apt-get update && apt-get install -y \
        libssl-dev \
        libicu-dev \
        libzip-dev \
        libonig-dev 

WORKDIR /home

CMD [ "tail", "-f", "/dev/null" ]
