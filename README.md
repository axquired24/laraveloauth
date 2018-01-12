<!-- badge -->
[![travis status](https://img.shields.io/travis/tanhauhau/generator-badge.svg)](https://travis-ci.org/tanhauhau/generator-badge)
<!-- endbadge -->

### Laravel Oauth2 
Laravel Version 5.5 Sample using Passport
Based on [This Tutorial](https://www.codepolitan.com/api-otentikasi-menggunakan-passport-laravel-59fc1153796b9)

### Requirements
- PHP 7.x
- Composer

### How To
```bash
# Config the environtment
$ cp .env.example .env

# Create database mysql then config at .env
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

# Install Dependencies
$ composer install

# Populate DB
$ php artisan migrate --seed

# Default Username & Password
- email: albert@gmail.com
- password: admin
```

