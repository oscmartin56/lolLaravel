# Creo el proyecto de Laravel

``laravel new Gestión campeones``

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
* Instalo DaisyUi para poder utilizarlo en el proyecto y en el archivo de tailwind.config.js
    agrego en los plugins " require("daisyui") " para que funcione.
* Instalo las migraciones, controlodares y los modelos con "php artisan make:model Champs -mcr"
* Creo en el factory un archivo para asi poder poblar mi tabla
* Creo un nuevo seeder para mis campeones "php artisan make:seeder ChampSeeder"
* Creo nuevas rutas para el create
* Creacion del create.blade.php habiendole añadido la ruta en el controlador
* Añadiendo la ruta del store en el form y añadiendole el @crsf por seguridad
## Diseño de pantallas
### 

* (Visualizar rutas usando: "php artisan route:list")
