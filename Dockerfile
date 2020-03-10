FROM php:7
WORKDIR /app
COPY Music_player.php /app
CMD [ "php", "-S", "0.0.0.0:8080", "Music_player.php"]

