@auth()
<h2>Campeón de League of Legends</h2>
<form action="{{route('champs.store')}}" method="post">
    @csrf

    <label for="name">Campeón</label>
    <select name="name">
        @foreach($champNames as $name)
            <option value="{{ $name }}">{{ $name }}</option>
        @endforeach
    </select>
    <label for="region">Región
    <select name="region">
        <option>Demacia</option>
        <option>Noxus</option>
        <option>Piltover</option>
        <option>Zaun</option>
        <option>Freljord</option>
        <option>Shurima</option>
        <option>Ionia</option>
        <option>Targon</option>
        <option>Las Islas de la Sombra</option>
        <option>Aguas Estancadas</option>
        <option>Bandle City</option>
        <option>El Vacío</option>
    </select>
    </label>
    <label for="Rol">Rol
        <select name="Rol">
            <option>Top Laner</option>
            <option>Jungla</option>
            <option>Mid Laner</option>
            <option>Ad Carry</option>
            <option>Support</option>
        </select>
    </label>
    <label for="difficulty">Dificultad
        <select name="difficulty">
            <option>Fácil</option>
            <option>Normal</option>
            <option>Dificil</option>
        </select>
    </label>
    <label for="RPCost">Precio en RP
        <select name="RPCost">
            <option>450</option>
            <option>1350</option>
            <option>3150</option>
            <option>4800</option>
            <option>6300</option>
            <option>7800</option>
        </select>
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
    <h1>NO TENDRÍAS QUE ESTAR </h1>
    </body>
    </html>
@endguest
