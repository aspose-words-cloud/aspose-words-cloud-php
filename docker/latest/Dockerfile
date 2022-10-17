FROM php:latest
RUN apt-get update
RUN apt install zip unzip
ENV COMPOSER_PROCESS_TIMEOUT=2000
COPY --from=composer/composer /usr/bin/composer /usr/bin/composer 