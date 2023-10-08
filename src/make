#!/bin/bash

dir=$(pwd)

if [ "$1" = 'migrate' ]; then
    curl https://www.z0k3r.online/migrate
    echo -e '\n'
elif [ "$1" = 'seed' ]; then
    curl https://www.z0k3r.online/seed
    echo -e '\n'
else
    curl https://www.z0k3r.online/migrateAndSeed
    echo -e '\n'
fi
