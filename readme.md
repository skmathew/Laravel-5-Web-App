# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).


composer create-project laravel/laravel learning-laravel-5

cd learning-laravel-5

bower install angular angular-bootstrap angular-resource bootstrap moment

php -S localhost:8888 -t public

.env.example to .env

php artisan make:controller PagesController

php artisan help make:controller

change .env to darabase and create a file base database in the storage directory and change the config/database file
to reflect the changes

php artisan migrate

sqlite3 storage/database.sqlite

.tables

.schema

php artisan migrate:rollback

php artisan migrate

php artisan help make:migration

php artisan make:migration create_articles_table --create="articles"

php artisan migrate

php artisan make:migration add_excerpt_to_articles_table --table="articles"

sqlite3 storage/database.sqlite

.exit

composer require doctrine/dbal

php artisan migrate:rollback



