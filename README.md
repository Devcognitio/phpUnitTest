Para Configurar el proyecto se requiere:

1. Lanzar composer autoload:
```composer dump-autoload```

2. Instalar las dependencias del proyecto:
```composer install```

3. Crear un alias para trabajar facilmente con phpunit:
```alias phpunit="./vendor/bin/phpunit"```

4. Verificar que todo quedó OK
```phpunit```
Debes ver que se ejecuta una prueba correctamente
----------

4. **(OPCIONAL)** En caso de no tener instalado xdebug, debe ser instalado.
https://xdebug.org/docs/install#configure-php

5. **(OPCIONAL)** Recuerda que el proyecto funciona con PHP 7.3 o PHP 7.4 y Composer 9.