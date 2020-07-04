#!/bin/bash

set -a
[ -f .env.dist ] && . ./.env.dist
[ -f .env ] && . ./.env
set +a

# Register shutdown handler
function gracefulShutdown ()
{
	mutagen project terminate
	docker-compose down --remove-orphans || true
    exit 2
}
trap "gracefulShutdown" 2

# Start file sync
docker-compose down --remove-orphans || true
mutagen project start || mutagen project terminate
mutagen project run logs
