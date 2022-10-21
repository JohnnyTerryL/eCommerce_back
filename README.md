# eCommerce_back

## Requerimientos

- Stack LEMP: PHP 8.0.22.
- Frameworks: Laravel Framework 9.31.0.
- Herramientas: Composer 2.4.2.

## Configuración e Instalación
Para comenzar es importante tener un ambiente de desarrollo local bien organizado, si estas usando MAC puedes usar [laravel valet](https://laravel.com/docs/8.x/valet), en caso de usar Ubuntu o Linux puedes ayudarte de docker o una configuraión manual LEMP.

En el caso de Windows se puede utilizar Homestead, XAMPP o WAMPP.

Clonar el repositorio con el siguiente comando.
```
git clone https://github.com/DanielEscobar21/eCommerce_back.git
```

Después de clonar el repositorio, dentro del directorio se debe de configurar el archivo .env tomando como referencia el ejemplo y revisando a detalle que cada variable esté bien configurada.

```
mv .env.example .env
```

### Instalación de Dependencias

- Descargar [composer](https://getcomposer.org/) y [PHP](https://www.php.net/downloads).
- Instalar composer con la versión de php especificada.
- Dentro de la carpeta del proyecto instalar las dependencias de Composer.
```
composer install --ignore-platform-req=ext-fileinfo
```

## Instalación de migraciones
Para correr agregar las tablas a la base de datos ejecutar el siguiente comando.
```
php artisan migrate
```

## Notas importantes de desarrollo

- No realizar commits directamente en las branches de develop y master ya que estas serán administradas por el RM (Release Manager).
- Se debe usar el modelo de branching de [git-flow](http://danielkummer.github.io/git-flow-cheatsheet/).
- Cada vez que se trabaje en algo se debe crear una branch a partir de develop y posteriormente al finalizar los cambios en vez de hacer un ```git flow feature finish nombre``` se subirá la branch al repo y de esa branch enviar el Pull Request (PR) a develop para que a su momento y después de que alguien más revise el código haga el merge a develop.
- El nombre de los commits debe ser en inglés empezando con letra mayúscula, sin punto final y explicando bien de lo que se trata el commit.
- Las feature branchs deben ser creadas usando [git-flow](http://danielkummer.github.io/git-flow-cheatsheet/) ejemplo: ```git flow feature start profile-api```
- El nombre de las feature branch debe ser en inglés y al estilo [kebab-case](http://wiki.c2.com/?KebabCase) ```english-name-using-kebab-case```.


## Autor
* **Daniel Escobar** - *Tech Lead* - [DanielEscobar21](https://github.com/DanielEscobar21)
