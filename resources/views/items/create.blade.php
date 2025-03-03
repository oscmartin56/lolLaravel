<x-layouts.layout>
@auth()
    <div class="bg-blue-300 min-h-full p-4 flex flex-col items-center justify-start">
        <h1 style="font-weight: bold; font-family: Chalkboard, comic sans ms, 'sans-serif'; font-size: 32px; text-align: center; margin-bottom: 0; color: white;">
            Crear Objetos para el Campeón de League of Legends
        </h1>

        <form action="{{ route('items.store') }}" method="post" class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-md mt-4">
            @csrf

            <!-- Selección de Campeón -->
            <div class="flex flex-col mb-4">
                <label style="font-size: 18px; font-weight: bold" for="id_champs">Selecciona un Campeón</label>
                <select name="id_champs" class="p-2 mt-2 bg-cyan-200 border border-gray-300 rounded-lg">
                    @foreach($champs as $champ)
                        <option value="{{ $champ->id }}">{{ $champ->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Selección de Objeto -->
            <div class="flex flex-col mb-4">
                <label style="font-size: 18px; font-weight: bold" for="name">Selecciona un Objeto</label>
                <select name="name" class="p-2 mt-2 bg-cyan-200 border border-gray-300 rounded-lg">
                    @foreach($itemNames as $name)
                        <option value="{{ $name }}" {{ in_array($name, $existingItems) ? 'disabled' : '' }}>
                            {{ $name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Selección de Daño -->
            <div class="flex flex-col mb-4">
                <label style="font-size: 18px; font-weight: bold" for="damage">Daño</label>
                <select name="damage" class="p-2 mt-2 bg-cyan-200 border border-gray-300 rounded-lg">
                    <option value="+10dmg">+10dmg</option>
                    <option value="+20dmg">+20dmg</option>
                    <option value="+30dmg">+30dmg</option>
                    <option value="+40dmg">+40dmg</option>
                    <option value="+50dmg">+50dmg</option>
                    <option value="+60dmg">+60dmg</option>
                </select>
            </div>

            <!-- Botones de acción -->
            <div class="flex justify-between mt-4 space-x-4">
                <button type="submit" class="w-full sm:w-auto p-3 bg-green-500 text-white rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                    Guardar
                </button>
                <a href="{{ route('items.index') }}" class="w-full sm:w-auto p-3 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400">
                    Cancelar
                </a>
            </div>
        </form>
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
    <h1>NO TENDRÍAS QUE ESTAR AQUÍ</h1>
    </body>
    </html>
@endguest
