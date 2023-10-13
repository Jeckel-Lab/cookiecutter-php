#!/usr/bin/env bash

composer update -W

git init
git add -A
git commit -m "Initialize project with Jeckel-Lab/cookiecutter-php" -n
