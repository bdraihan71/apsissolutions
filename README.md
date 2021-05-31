<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation's Instruction


- Clone GitHub repo for this project locally
- cd into your project
- Install Composer Dependencies
```sh
composer install
```
- Create a copy of your .env file
- Generate an app encryption key
```sh
php artisan key:generate
```
- Create an empty database for our application
- In the .env file, add database information to allow Laravel to connect to the database
- Migrate the database
```sh
php artisan migrate
```
- Seed the database
```sh
php artisan db:seed
```


## How to run and how to see output
- Run Server
```sh
php artisan serve
```
- Using PHP recursive function for creating a menu
```sh
http://127.0.0.1:8000
```

- Using Laravel eloquent relationships for creating a treeview
```sh
http://127.0.0.1:8000/item
```
