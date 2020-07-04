FROM markomitranic/sosko-aio-php:7.4
# Initial customisations
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1
COPY config/php.ini /usr/local/etc/php/conf.d/z-custom.ini
# Refresh the entrypoint and command
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
ENTRYPOINT []
# Copy the source code (honors .dockerignore)
COPY ./src /app/src
RUN composer install

