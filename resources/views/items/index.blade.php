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
        <div style="display: flex; flex-direction: column; align-items: center; width: 80%; margin: 10px; border: 1px solid #ddd;">
            <div style="width: 100%; max-height: 600px; overflow-y: auto;">
                <table style="width: 100%; border-collapse: collapse; font-size: 16px;">
                    <thead style="position: sticky; top: 0; background-color: #f4f4f4; z-index: 10;">
                    <tr>
                        <th>ID Campeón</th>
                        <th>Campeón</th>
                        <th>Región</th>
                        <th>Rol</th>
                        <th>Dificultad</th>
                        <th>ID Objeto</th>
                        <th>Objeto</th>
                        <th>Daño</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{$item->id_champs}}</td>
                            <td>{{$item->champs->name}}</td>
                            <td>{{$item->champs->region}}</td>
                            <td>{{$item->champs->Rol}}</td>
                            <td>{{$item->champs->difficulty}}</td>
                            <td>{{$item->id }}</td>
                            <td>{{$item->name }}</td>
                            <td>{{$item->damage}}</td>
                            <td>
                                <!-- Formulario para eliminar el objeto -->
                                <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
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

        <div style="display: flex; justify-content: center; width: 100%; margin-top: 20px; padding-right: 10px;">
            <button style="color: greenyellow; background-color: #2563eb; border-radius: 15px; height: 50px; width: 120px;">
                <a href="{{ route('items.create') }}" style="color: inherit; text-decoration: none;">Agregar</a>
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
    <h1>NO TENDRÍAS QUE ESTAR AQUI</h1>
    </body>
    </html>
@endguest
