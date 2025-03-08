<x-layouts.layout>
@auth()
    <div style="display: flex; flex-direction: column; align-items: center;width: 80%; margin: 20px auto; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); padding: 10px;">
        <div style="width: 100%; max-height: 380px; overflow-y: auto; overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead style="position: sticky; top: 0; background-color: #2563eb; color: white; z-index: 10;">
                <tr>
                    <th>{{ __('messages.idCampeon') }}</th>
                    <th>{{ __('messages.campeon') }}</th>
                    <th>{{ __('messages.region') }}</th>
                    <th>{{ __('messages.rol') }}</th>
                    <th>{{ __('messages.dificultad') }}</th>
                    <th>{{ __('messages.precio') }}</th>
                    <th>{{ __('messages.acciones') }}</th>
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
                        <td style="display: flex; gap: 8px; justify-content: center;">
                            <form action="{{ route('champs.destroy', $champ->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de querer eliminar el campeón seleccionado?')" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="padding: 8px 16px; border-radius: 8px; background-color: #ef4444; color: white; text-decoration: none; display: inline-block; transition: background-color 0.3s ease;">{{ __('messages.eliminar') }}</button>
                            </form>

                            <a href="{{ route('champs.edit', $champ->id) }}" style="padding: 8px 16px; border-radius: 8px; background-color: #3b82f6; color: white; text-decoration: none; display: inline-block; text-align: center; transition: background-color 0.3s ease;">{{ __('messages.actualizar') }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div style="display: flex; justify-content: flex-end; width: 100%; gap: 10px; margin-top: 20px; position: relative;">
            <a href="{{ route('champs.create') }}" style="background-color: #22c55e; color: black; padding: 8px 16px; border-radius: 8px; text-decoration: none; transition: background-color 0.3s ease;">{{ __('messages.agregar') }}</a>

            <a href="{{ route('home') }}" style="background-color: #6b7280; color: white; padding: 8px 16px; border-radius: 8px; text-decoration: none; transition: background-color 0.3s ease;">{{ __('messages.volver') }}</a>
        </div>
    </div>
@endauth
</x-layouts.layout>

@guest()
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <h1>NO TENDRÍAS QUE ESTAR AQUI</h1>
    </body>
    </html>
@endguest
