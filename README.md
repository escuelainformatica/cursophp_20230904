# instale laravel

## requisitos

* descomprimir php en una carpeta y agregarlo al path.
* instalar composer.

En el terminal:
```bash
php -v  
```
En el terminal
```bash
composer
```

## instalar
Ir a la carpeta donde se quiere crear el proyecto
```bash
cd c:/proyectos
```
correr el siguiente comando: (cambiando example-app por el nombre de la aplicacion)
```bash
composer create-project laravel/laravel example-app
```
## Abrir visual studio 
* Abrir visual studio code y seleccionar la carpeta que se creo
* En visual studio, abri un terminal
Y ejecutar lo siguiente

```bash
php artisan serve
```
Y eso va a abrir un servidor web http://127.0.0.1:8000

# configurar el proyecto

## configuracion
Editar el archivo de configuracion (.env)

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sakila
DB_USERNAME=root
DB_PASSWORD=abc.123
```
## voy a crear un controlador.

En el terminal
```bash
php artisan make:controller ActorController
```

## voy a crear un modelo
En el terminal

```bash
php artisan make:model Actor
```

## voy a crear un vista
Ir a la carpeta resources, views y crear un archivo con extension blade.php

## editar enrutamiento 
en la carpeta routes, editar el archivo web.php

```php
Route::get('/listar',[ActorController::class,'listar']);
```

## correr el codigo
en el terminal ejecutar
```bash
php artisan serve 
```
y abrir la pagina indicada en el enrutamiento