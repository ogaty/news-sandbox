FROM node:18-bullseye
RUN apt update

RUN apt upgrade -y
RUN apt install -y \
        vim less

WORKDIR /src

CMD ["tail", "-f", "/dev/null"]
