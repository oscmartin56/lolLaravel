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
    <div style="display: flex; align-items: center; justify-content: flex-start;">
        <table>
            <thead>
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
        <a style="color: greenyellow; background-color: #2563eb; border-radius: 15px; font-size: 20px; padding: 10px 15px;display: inline-block;" href="{{route('champs.create')}}">Agregar</a>
    </div>
    </body>
    </html>
</x-layouts.layout>
