# Sorting in Laravel - Project | Laravel 9  <img height="25" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" />

>This is a simple project showing how sorting is working in Laravel. In this project sorting is available with ID(asc, desc), [name, details(a-z)] and with date(created at timestamp). Also, in this project is available pagination. There are 25 products for demonstration purposes.

![sorting](https://i.postimg.cc/vHH8fCvg/bla.png)

## Requirements 
* PHP 8.0 and above
* Composer 
* Since this project is running Laravel 9, I suggest checking out the official requirements

## Installation
* Clone the repository by running the following command in your command line below (Or you can download the zip file from GitHub)
```shell
git clone https://github.com/dzonidevv/laravel-sorting.git
 ```
* Head to the projects directory
```shell
cd laravel-sorting-master
 ```
* Install/Update Composer dependencies
```shell
composer install 
```

* Copy .env.example file into .env file and configure based on your environment
```shell
cp .env.example .env
```
* Generate an encryption key
```shell
php artisan key:generate
```
* Migrate the database
```shell
php artisan migrate 
```
* Seed database - <b>Important!</b>

    - Use the following command
    
        ```shell
        php artisan db:seed
        ```
        
* For development or testing purposes, you can use the Laravel built-in server by running 
```shell
php artisan serve
```

After running the above commands, you should be able to access the application at http::/localhost or your designated domain name depending on the configuration.










