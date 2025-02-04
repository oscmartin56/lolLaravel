# Creo el proyecto de Laravel

''''bash
laravel new Gest ión
''''''

En el proceso de instalacion de dan opciones y selcciono:
* Install breeze
* Blade para las pantallas
* Modo oscuro
* PHPunit para pruebas unitarias
* mysql como gestor
Me dara un error porque no puede ejecutar migraciones
* Realizo un npm install
  * Instalo docker-compose.yaml copiando el fichero de otro proyecto 
* Modifico el archivo .env, y añado un "DB_ROOT_PASSWORD=root12345" y modifico el DB_PORT a "23306".
* Reinicio el docker compose si se encuentra abierto y realizo un php artisan migrate

## Diseño de pantallas
### 
