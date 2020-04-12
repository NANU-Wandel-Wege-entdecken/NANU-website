#!/bin/bash

# thanks to https://andy-carter.com/blog/automating-npm-and-composer-with-git-hooks

changedFiles="$(git diff-tree -r --name-only --no-commit-id ORIG_HEAD HEAD)"

runOnChange() {
	echo "$changedFiles" | grep -q "$1" && eval "$2"
}

#project folder
runOnChange package-lock.json "npm install"
runOnChange composer.lock "composer install"

#theme folder
cd public/themes/nanu
runOnChange package-lock.json "npm install"
runOnChange composer.lock "composer install"

runOnChange assets/src "npm run dev"

echo 'project freshed up'
