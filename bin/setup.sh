#!/bin/bash

# setup git hooks
git config core.hooksPath git-hooks

# run installers and things
./bin/compile.sh

echo 'setup complete'
