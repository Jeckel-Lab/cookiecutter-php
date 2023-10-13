# Cookiecutter PHP

[Cookiecutter] template to kickstart new PHP projects.

> 🚀 Forked from the original [PHP Cookicutter](https://github.com/jeromegamez/cookiecutter-php) by [Jérôme Gamez](https://github.com/jeromegamez) 

## Features

* Automated [Composer] Setup
* Testing setup with 
  * [PHPStan](https://phpstan.org/)
  * [PHPUnit](https://phpunit.de/)
  * [Infection](https://infection.github.io/)
  * [PHP-CS-Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer)
  * [PHP-MD](https://phpmd.org/)
  * ...
* Ready-to-go GitHub Actions

## Quickstart

[Install Cookiecutter][Cookiecutter Installation Docs]:

```shell
$ pip install -U cookiecutter
# Or, on a mac with Homebrew
$ brew install cookiecutter
```

Generate a new PHP project:

```shell
$ cookiecutter gh:Jeckel-Lab/cookiecutter-php
```

## Demo

[![asciicast](https://asciinema.org/a/385151.svg)](https://asciinema.org/a/385151)

## User config

If you use this (or other) Cookiecutters a lot, you can override the defaults by having
a `.cookiecutterrc` file in your home directory:

```yml
default_context:
    full_name: "My full name"
    email: "me@example.com"
    github_username: "mygithubusername"
abbreviations:
    php: https://github.com/jeromegamez/cookiecutter-php
```

You can find more information at https://cookiecutter.readthedocs.io/en/latest/advanced/user_config.html

[Composer]: https://getcomposer.org/
[Cookiecutter]: https://github.com/cookiecutter/cookiecutter/
[Cookiecutter Installation Docs]: https://cookiecutter.readthedocs.io/en/latest/installation.html
[PHPStan]: https://phpstan.org/
[PHPUnit]: https://phpunit.de/
