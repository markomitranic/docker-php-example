#!/bin/bash

set -a
[ -f .env.default ] && . ./.env.default
[ -f .env ] && . ./.env
set +a

# Run the thing.
docker-compose down --remove-orphans
docker-compose build
docker-compose up --remove-orphans
