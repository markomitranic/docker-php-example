FROM markomitranic/sosko-aio-php:7.4 AS base
# Initial customisations
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1
COPY config/php.ini /usr/local/etc/php/conf.d/z-custom.ini

FROM base AS prod
# Copy the source code (honors .dockerignore)
COPY ./src /app/src
RUN composer install
