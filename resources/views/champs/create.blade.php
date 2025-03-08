<x-layouts.layout>
@auth
    <div class="bg-blue-300 min-h-full p-2 flex flex-col items-center justify-start">
        <h2 class="font-bold text-white text-2xl text-center mb-4" style="font-family: Chalkboard, Comic Sans MS, sans-serif;">
            {{ __('messages.tituloCrearChamps') }}
        </h2>

        <form action="{{ route('champs.store') }}" method="post" class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-md mt-4">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                <!-- Columna 1 -->
                <div class="flex flex-col">
                    <label for="name" class="block text-lg font-bold">{{ __('messages.campeon') }}</label>
                    <select name="name" class="p-2 mt-2 bg-cyan-200 border border-gray-300 rounded-lg w-full">
                        @foreach($champNames as $name)
                            <option value="{{ $name }}" {{ in_array($name, $existingChamps) ? 'disabled' : '' }}>
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="flex flex-col">
                    <label for="region" class="block text-lg font-bold">{{ __('messages.region') }}</label>
                    <select name="region" class="p-2 mt-2 bg-cyan-200 border border-gray-300 rounded-lg w-full">
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
                </div>

                <!-- Columna 2 -->
                <div class="flex flex-col">
                    <label for="Rol" class="block text-lg font-bold">{{ __('messages.rol') }}</label>
                    <select name="Rol" class="p-2 mt-2 bg-cyan-200 border border-gray-300 rounded-lg w-full">
                        <option>Top Laner</option>
                        <option>Jungla</option>
                        <option>Mid Laner</option>
                        <option>Ad Carry</option>
                        <option>Support</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label for="difficulty" class="block text-lg font-bold">{{ __('messages.dificultad') }}</label>
                    <select name="difficulty" class="p-2 mt-2 bg-cyan-200 border border-gray-300 rounded-lg w-full">
                        <option>{{ __('messages.dificultadFacil') }}</option>
                        <option>{{ __('messages.dificultadNormal') }}</option>
                        <option>{{ __('messages.dificultadDificil') }}</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label for="RPCost" class="block text-lg font-bold">{{ __('messages.precio') }}</label>
                    <select name="RPCost" class="p-2 mt-2 bg-cyan-200 border border-gray-300 rounded-lg w-full">
                        <option>450</option>
                        <option>1350</option>
                        <option>3150</option>
                        <option>4800</option>
                        <option>6300</option>
                        <option>7800</option>
                    </select>
                </div>
            </div>

            <div class="flex justify-between mt-6 space-x-4">
                <button type="submit" class="w-full sm:w-auto p-3 bg-green-500 text-white rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                    {{ __('messages.guardar') }}
                </button>
                <a href="{{ route('champs.index') }}" class="w-full sm:w-auto p-3 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 text-center">
                    {{ __('messages.cancelar') }}
                </a>
            </div>
        </form>
    </div>
@endauth
</x-layouts.layout>

@guest
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
