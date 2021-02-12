## ILOGICA PRUEBA TENICA.

Se pretende evaluar el desarrollo de un sitio web usando laravel y sus capacidades, controladores, modelos, migraciones, faker, seeders,
base de datos, etc.

### Librerias, framwork's, complementos, base de datos usad(@)s

Para el desarrollo de la prueba se uso:

- [PostgreSql versión 9.2 ](https://www.postgresql.org/download/).
- [Laravel 8.x ](https://laravel.com).
- [Laravel/ui ](https://laravel.com).
- [styde/html ~1.0 ](https://github.com/StydeNet/html).
- [Boostrap 4 ](https://getbootstrap.com/).
- [composer ](https://getcomposer.org/).

### Instrucciones de instalación

Para ejecutar dicho proyecto, realizado solo para la prueba tecnica de Ilogica,
se deben seguir las siguientes instrucciones

	1) Tener instalado un servidor web para php y el motor de base de datos postgres
    2) Tener instalado composer
	3) Crear la base de datos con el ilogica_test_laravel;
    4) Ejecutar el siguiente comando en la raiz del directorio

        -   composer install

    5) configurar el archivo .evn con las credenciales de la base de datos en la raiz
       del proyecto.    
	6) Instalar las migraciones de laravel, ejecutando el comando en la raiz del proyecto
       
        -   php artisan migrate

    7) Posteriormente ejecutar el siguiente comando en la raiz del proyecto, para verificar
       que todas las migraciones estan ok!
        
        -   php artisan migrate:status

    8) Luego se debe ejcutar los siguientes dos comandos en la raiz del proyecto, para
       carga información inicial:

        -   php artisan db:seed --class=DatabaseSeeder
        -   php artisan db:seed --class=ConfigAppSeeder

        nota: antes de corres el seeder, busca el seeder "DatabaseSeeder" y define la
        contraseña con la cual deseas que se creen los usuarios administrativos.

    9) Por ultimo ejecuta en la raiz del proyecto el comando y visita en tu navegador
       de preferencia la url que este entrega.

        -   php artisan serve
