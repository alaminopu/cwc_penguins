# Penguins Shop (IST)

A **Buy and Sell** platform built on Laravel and MongoDB

# Requirements
1. [Composer](https://getcomposer.org/doc/00-intro.md#globally)
2. [Laravel 4.2](http://laravel.com/docs/4.2)
3. [Mongodb 2.6.7](https://www.mongodb.org/downloads)



# Installation
1. Clone this repo
```bash
git clone https://github.com/alaminopu/cwc_penguins.git
```
2. Go to project folder `cd cwc_penguins` and run
```bash
composer update
```



# Configuration

+ add your hostname to `bootstrap/start.php` file.

  Ignore configuration files from git using.
```bash
git update-index --assume-unchanged bootstrap/start.php
```


+ open a new terminal and type `mongo` then to  create a user in database use the following command
```bash
use cwc_penguins
db.createUser({'user':"root",pwd:"root",roles:[{'role':"readWrite",db:"cwc_penguins"}]})
```

+ Go to your project directory and type 
```bash
php artisan migrate
php artisan db:seed
```

# Run
+ Open your browser and visit this address

```bash
http://<your-server-hostname>/cwc_penguins/
```
Example:

```bash
http://localhost/cwc_penguins/
```
