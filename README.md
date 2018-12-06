# Sindicatura Digital

## Instrucciones de instalación usando Docker


### 1.- Instalar dependencias  
    composer install

### 2.- Instalar packages y crear los css y JS
    npm install && npm run dev

### 3.- crear el .env 
    cp .env.example .env

#### 4.- Crear la llave 
    php artisan key:generate

### #5.- Correr laradock (en caso de usar docker)
    git clone https://github.com/Laradock/laradock.git
    cd laradock
    cp env-example .env
    docker-compose up -d nginx mysql phpmyadmin redis 


More about Laradock

https://laradock.io/guides/#set-up-your-laravel-project

## Assets

Bootstrap 4 CSS

VueJs -  ( No more jQuery :D !)

PHP 7.2
