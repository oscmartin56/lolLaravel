@auth()
<h2>Campeón de League of Legends</h2>
<form action="{{route('champs.store')}}" method="post">
    @csrf

    <label for="name">Nombre
    <input type="text" name="name">
    </label>
    <label for="region">Región
    <input type="text" name="region">
    </label>
    <label for="Rol">Rol
    <input type="text" name="Rol">
    </label>
    <label for="difficulty">Dificultad
    <input type="text" name="difficulty">
    </label>
    <label for="RPCost">Precio en RP
    <input type="text" name="RPCost">
    </label>
    <button>Guardar</button>
</form>
@endauth
@guest()
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create No</title>
    </head>
    <body>
    <h1>NO TENDRIAS QUE ESTAR </h1>
    </body>
    </html>
@endguest
