#!/bin/bash

# setup git hooks
git config core.hooksPath git-hooks

# run installers and things
./bin/compile.sh

if [ ! -f "./.env" ];
then echo ".env missing - please copy .env.example and adjust to your needs";
fi

echo 'setup complete'
