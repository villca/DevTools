<p align="center"><img src="https://avatars3.githubusercontent.com/u/34888056">Numeros En Letras</p>
<p align="center">
<a href="https://packagist.org/packages/villca/devtools"><img src="https://poser.pugx.org/villca/devtools/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/villca/devtools"><img src="https://poser.pugx.org/villca/devtools/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/villca/devtools"><img src="https://poser.pugx.org/villca/devtools/license.svg" alt="License"></a>
</p>

## PHP Framework

<p align="center">
<img src="https://laravel.com/assets/img/components/logo-laravel.svg">
<img src="https://phalconphp.com/images/phalcon1.png">
<img src="https://symfony.com/logos/symfony_black_02.svg">
</p>

## Descripción
DevTools herramientas para desarrollo de software.

## Instalación
Segir los siguientes pasos.

Mediante comando:

    $ composer require villca/devtools

ó modificando el archivo composer.json:

```json
{
    "require": {
        "villca/devtools": "v1.2"
    }
}
```

## Configuración
Agregar a Controlador `use DevTools;`

## Ejemplo Laravel

Agregar a la Ruta en "routes/web.php"

    $ Route::get('/villca', 'HomeController');
    
Crear el controlador "HomeController.php"

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DevTools;

class HomeController extends Controller
{
    public function index()
    {
        echo 'La Paz, ' . DevTools::fecha_texto(); //La Paz, 15 de Marzo de 2018
        
    }
}
```

## Contactos

 [Facebook](https://www.facebook.com/JhessuVillca)
