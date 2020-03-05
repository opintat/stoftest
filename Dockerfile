FROM php:7.4.3-cli

# Install mysql and cron
RUN apt-get update && apt-get install -y
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /app
