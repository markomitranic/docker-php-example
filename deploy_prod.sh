#!/bin/bash

set -a
[ -f .env.dist ] && . ./.env.dist
[ -f .env ] && . ./.env
set +a

# Run the thing.
docker-compose down --remove-orphans
docker-compose build
docker-compose up --remove-orphans
