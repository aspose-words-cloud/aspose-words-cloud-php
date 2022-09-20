FROM php:latest
RUN apt-get update
RUN apt install zip unzip
COPY --from=composer/composer /usr/bin/composer /usr/bin/composer 