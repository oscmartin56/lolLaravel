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
* Agregar en el DatabaseSeeder "$this->call([ChampSeeder::class,]);" para enlazarlo con el nuevo seeder y comentar el "userFactory"
* Relaciono las dos tablas 1-n en los modelos con el hasMany y el belongsTo y en el controlador añado un all de la otra tabla y la compacto
* Añado un un mensaje en el controlador cuando se añade un campeon y lo pongo visible en el header
* Añadido en el create la ruta y la obtención del json para poder sacar su contenido
* Creacion de idiomas, creo la carpeta lang en resources y creo las subcarpetas con sus idiomas, a su vez creo un .php para añadir el texto en su idioma y lo enlazo en los diferentes sitios de la web con {{ __('messages.loquesea') }} y despues creo el controlador(php artisan make:controller LanguageController)  y su middleware(php artisan make:middleware LanguageMiddleware)
* Creacion también del layout de lang, en el config el languages.php para añadir los idiomas y en el bootstrap/app.php añadir el middleware de LanguagesController
* Página Web Terminada
## Diseño de pantallas
### 

* Crear modelos: "php artisan make:model 'lo que quieras'"
* Crear migraciones "php artisan make:migration create_'lo que quieras'_table"
* (Visualizar rutas usando: "php artisan route:list")
