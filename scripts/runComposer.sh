docker run -v "$(pwd):/opt/project" -w="/opt/project" composer composer install --no-interaction
docker run -v "$(pwd):/opt/project" -w="/opt/project" composer composer dump-autoload --no-interaction
