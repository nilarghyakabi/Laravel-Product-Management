<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
# Product Management System - Laravel Project

## Introduction
 This project is a product management system built with Laravel. It includes user authentication with roles (Admin and User), where only Admin can manage products (CRUD), and Users can only view the product list.

## Requirements

- PHP => 8.1
- PHP >= 8.1
- Composer
- vs code( Co-Editor)
- Node.js & NPM
- local Server (Xampp)
- MySQL

## Installation Guide
### Step1: Create a new Laravel project using composer

- in terminal I have to use this command :- 
  composer create-project laravel/laravel productManagement

### Step2: Install Dependencies

- Install NPM Dependencies
    npm install
    npm run build
### Step3: SetUp Environment Variables (.env)
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=productManagement
    DB_USERNAME=root
    DB_PASSWORD=

### Step4: Create Database and seed database in phpmyadmin
 database name:-productManagement
  - run command:-
    php artisan migrate  --seed
  

### Step5: Set Up Laravel Breeze for Authentication

- install breeze , npm 
    php artisan breeze:install
    npm install
    npm run build

### Step6: start the Laravel Server

php artisan serve

## Features

### Admin Role:
- Create, Read, Update, Delete (CRUD) products.

### User Role:
- View product list. 

### Form Validation:
- Validation is implemented for product creation and updating.

### Notes:
- user type column is added in User table , and in blade file a dropdown is added for choose user type (admin or user)
- I have create two middleware file for different dashboard for different User type (admin and user)
- User roles: Admin can manage product's CRUD Operations ; User can only view them.
- The application uses Bootstrap for styling by default. but I have to add the cdn link in layout/app.blade.php file

## Contact
For any issues or further assistance, feel free to reach out at [nilarghyakabiraj@gmail.com]