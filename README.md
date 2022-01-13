<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## API Verifarma

Esto es una pequeña API para la creacion de farmacias y obtencion de farmacias mas cercanas:

## Levantar proyecto

El proyecto esta creado en Laravel 8, dejo los pasos para levantar el mismo:
- Programas requeridos:
    - PHP 7.2 - 8.0^
    - NODE JS 6.14^
    - COMPOSER 2.1.5^
    - Xampp o similar para levantar la base de datos local
- Base de datos:
- Crear de manera local una base de datos MySql con los datos: 
    -nombre de la base de datos: verifarma
    -usuario: root
    -sin contraseña
- Comandos para instalar y levantar el proyecto:
    (Iniciar los servicios de MySql previamente creada la base de datos)
    desde una terminal, estando en la carpeta raiz del proyecto lanzar los siguients comandos:
    - npm install
    - composer install
    - php artisan migrate
    - php artisan serve
## Correr test unitarios

Para correr los test unitarios debe ejeutar el comando:
- php artisan test

### Documentacion de la API

- **[Documentancion](https://www.getpostman.com/collections/cdcde9290e8b7e90ba39)**