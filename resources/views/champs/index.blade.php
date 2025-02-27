@auth()
<x-layouts.layout>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Index</title>
    </head>
    <body>
    <div style="display: flex; flex-direction: column; align-items: center; width: 40%; margin: 10px; border: 1px solid #ddd;">
        <div style="width: 100%; max-height: 400px; overflow-y: auto;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead style="position: sticky; top: 0; background-color: white; z-index: 10;">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Región</th>
                    <th>Rol</th>
                    <th>Dificultad</th>
                    <th>Precio RP</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($champs as $champ)
                    <tr>
                        <td>{{ $champ->id }}</td>
                        <td>{{ $champ->name }}</td>
                        <td>{{ $champ->region }}</td>
                        <td>{{ $champ->Rol }}</td>
                        <td>{{ $champ->difficulty }}</td>
                        <td>{{ $champ->RPCost }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <div style="display: flex; justify-content: center; width: 100%; margin-top: -40vh">
        <button style="color: greenyellow; background-color: #2563eb; border-radius: 15px; height: 50px; width: 80px;">
            <a href="{{ route('champs.create') }}" style="color: inherit; text-decoration: none;">Agregar</a>
        </button>
    </div>

    </body>
    </html>
</x-layouts.layout>
@endauth

@guest()
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>INDEX NO</title>
    </head>
    <body>
    <h1>NO TENDRIAS QUE ESTAR AQUI</h1>
    </body>
    </html>
@endguest
