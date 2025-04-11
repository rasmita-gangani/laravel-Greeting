# Laravel Greeting Package

![Laravel](https://img.shields.io/badge/Laravel-8%2B-orange.svg) ![PHP](https://img.shields.io/badge/PHP-7.4%2B-blue.svg)

A simple Laravel package that provides greeting messages based on the time of day.

## 🚀 Installation

You can install the package via Composer:

```sh
composer require rasmita-gangani/greeting
```

## Usage
Using the Facade

```sh
use Greeting;

echo Greeting::message(); // Output: "Good morning!" (depending on the time)
```

Using the Helper Function

```sh
echo greeting(); // Output: "Good afternoon!"
```

## Features
* Provides dynamic greetings based on the time of day.
* Can be accessed via a Facade or a helper function.
* Lightweight and easy to use.

## Configuration (Optional)
If you want to customize how greetings are handled, publish the configuration file:
 ```sh
php artisan vendor:publish --provider="rasmita-gangani\Greeting\GreetingServiceProvider"
```
Then, update config/greeting.php as needed.
