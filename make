#!/bin/bash

dir=$(pwd)

if [ "$1" = 'migrate' ]; then
    GET http://192.168.116.128:8082/migrate
    echo -e '\n'
elif [ "$1" = 'seed' ]; then
    GET http://192.168.116.128:8082/seed
    echo -e '\n'
elif [ "$1" = 'migrate:seed' ]; then
    GET http://192.168.116.128:8082/migrateAndSeed
    echo -e '\n'
fi
