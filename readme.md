# Kwiki - Laravel Package

## WORK IN PROGRESS, DO NOT USE RIGHT NOW

[![Version](https://img.shields.io/packagist/v/ryanwinchester/kwiki-laravel.svg?style=flat-square)](https://packagist.org/packages/ryanwinchester/kwiki-laravel)
 [![Total Downloads](https://img.shields.io/packagist/dt/ryanwinchester/kwiki-laravel.svg?style=flat-square)](https://packagist.org/packages/ryanwinchester/kwiki-laravel)
 [![License](https://img.shields.io/packagist/l/ryanwinchester/kwiki-laravel.svg?style=flat-square)](https://packagist.org/packages/ryanwinchester/kwiki-laravel)
 [![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/ryanwinchester/kwiki-laravel.svg?style=flat-square)](https://scrutinizer-ci.com/g/ryanwinchester/kwiki/?branch=master)
 [![Build Status](https://img.shields.io/travis/ryanwinchester/kwiki-laravel.svg?style=flat-square)](https://travis-ci.org/ryanwinchester/kwiki-laravel)
 
## markdown wiki/blog

## Usage

Place your markdown files in the `/kwiki` directory.

Categories are directories and subcategories are subdirectories.
 
If you place an `index.md` in a category or subcategory directory, it will be parsed and displayed after the list of 
subcategories and files.

The views are blade templates and located at `resources/views/vendor/kwiki` and the master layout template is 
`resources/views/vendor/kwiki/master.blade.php`
 
## Installation
 
Using composer:
 
```bash
composer require "ryanwinchester/kwiki: ^0.1"
```

## Publishing config and other assets

There is a good chance you wil want to override some default things. If that is the case there are a couple of 
way you can go about it. First, you could publish *all the things*:

```bash
php artisan vendor:publish --provider="Kwiki\KwikiServiceProvider" --force
```

Or you could publish things individually:

Config:

```bash
php artisan vendor:publish --provider="Kwiki\KwikiServiceProvider" --tag="config" --force
```

Views:

```bash
php artisan vendor:publish --provider="Kwiki\KwikiServiceProvider" --tag="views" --force
```

Public assets:

```bash
php artisan vendor:publish --provider="Kwiki\KwikiServiceProvider" --tag="public" --force
```

Translations:

```bash
php artisan vendor:publish --provider="Kwiki\KwikiServiceProvider" --tag="translations" --force
```

## Powered by

- [Laravel](https://github.com/laravel/framework) - Laravel framework
- [Pagemark](https://github.com/ryanwinchester/pagemark) - A package I wrote that basically does all the work
- [Parsedown](https://github.com/erusev/parsedown) - A popular markdown parser, and this project's default
