FROM php:latest
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
RUN apt-get update && apt install zip unzip
ADD . ./app
WORKDIR /app
RUN composer install --no-interaction && composer dump-autoload -o