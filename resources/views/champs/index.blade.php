<x-layouts.layout>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Index</title>
    </head>
    <body>
    <div style="display: flex; flex-direction: column; align-items: center; width: 70%; margin: 10px; border: 1px solid #ddd;">
        <div style="width: 100%; max-height: 400px; overflow-y: auto;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead style="position: sticky; top: 0; background-color: white; z-index: 10;">
                <tr>
                    <th>ID Campeón</th>
                    <th>Campeón</th>
                    <th>Región</th>
                    <th>Rol</th>
                    <th>Dificultad</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($champs as $champ)
                    <tr>
                        <td>{{$champ->id}}</td>
                        <td>{{$champ->name}}</td>
                        <td>{{$champ->region}}</td>
                        <td>{{$champ->Rol}}</td>
                        <td>{{$champ->difficulty}}</td>
                        <td>
                            <form action="{{ route('champs.destroy', $champ->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="color: white; background-color: red; border-radius: 5px; padding: 5px 10px;">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Div separado para el botón 'Agregar' alineado a la derecha -->
    <div style="display: flex; justify-content:center; width: 70%; margin-top: 10px; padding-right: 10px;">
        <button style="color: greenyellow; background-color: #2563eb; border-radius: 15px; height: 50px; width: 120px;">
            <a href="{{ route('champs.create') }}" style="color: inherit; text-decoration: none; text-align: center; line-height: 50px;">Agregar</a>
        </button>
        <button style="color: greenyellow; background-color: #2563eb; border-radius: 15px; height: 50px; width: 120px;">
            <a href="{{ route('champs.edit') }}" style="color: inherit; text-decoration: none; text-align: center; line-height: 50px;">Actualizar</a>
        </button>
    </div>
    </body>
    </html>
</x-layouts.layout>
