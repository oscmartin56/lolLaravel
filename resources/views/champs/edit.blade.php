<x-layouts.layout>
@auth
    <div class="bg-blue-300 min-h-full p-4 flex flex-col items-center justify-start">
        <h1 class="font-bold text-white text-2xl text-center mb-0" style="font-family: Chalkboard, Comic Sans MS, sans-serif;">
            Editar Campeón de League of Legends
        </h1>

        <form action="{{ route('champs.update', $champs->id) }}" method="post" class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-md mt-4"
              onsubmit="return confirm('¿Estás seguro de querer actualizar el campeón seleccionado?')">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-6 mb-2.3">
                <div class="flex flex-col bg-gray-50 p-3 rounded-lg shadow-sm border border-gray-300">
                    <label class="text-lg font-bold text-black" for="name">Campeón</label>
                    <div class="mt-1 text-lg font-semibold text-gray-900 bg-gray-200 px-4 py-2 rounded-md shadow-inner text-center">
                        <input type="hidden" name="name" value="{{ $champs->name }}">
                        {{ $champs->name }}
                    </div>
                </div>


                <div class="flex flex-col">
                    <label class="text-lg font-bold" for="region">Región</label>
                    <select class="p-2 mt-2 bg-cyan-200 border border-gray-300 rounded-lg" name="region">
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
            </div>

            <div class="grid grid-cols-2 gap-6 mb-4">
                <div class="flex flex-col">
                    <label class="text-lg font-bold" for="Rol">Rol</label>
                    <select class="p-2 mt-2 bg-cyan-200 border border-gray-300 rounded-lg" name="Rol">
                        <option>Top Laner</option>
                        <option>Jungla</option>
                        <option>Mid Laner</option>
                        <option>Ad Carry</option>
                        <option>Support</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label class="text-lg font-bold" for="difficulty">Dificultad</label>
                    <select class="p-2 mt-2 bg-cyan-200 border border-gray-300 rounded-lg" name="difficulty">
                        <option>Fácil</option>
                        <option>Normal</option>
                        <option>Difícil</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6 mb-4">
                <div class="flex flex-col">
                    <label class="text-lg font-bold" for="RPCost">Precio en RP</label>
                    <select class="p-2 mt-2 bg-cyan-200 border border-gray-300 rounded-lg" name="RPCost">
                        <option>450</option>
                        <option>1350</option>
                        <option>3150</option>
                        <option>4800</option>
                        <option>6300</option>
                        <option>7800</option>
                    </select>
                </div>
            </div>

            <!-- Botones -->
            <div class="flex justify-between mt-4 space-x-4">
                <button class="w-full sm:w-auto p-3 bg-green-500 text-white rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                    Actualizar
                </button>
                <a class="w-full sm:w-auto p-3 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400" href="{{ route('champs.index') }}">
                    Cancelar
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
