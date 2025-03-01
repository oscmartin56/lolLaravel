<x-layouts.layout>
    @auth()
        <div class="bg-blue-300 min-h-screen p-4 flex flex-col items-center justify-start">
            <h1 style="font-weight: bold; font-family: Chalkboard, comic sans ms, 'sans-serif'; font-size: 32px; text-align: center; margin-bottom: 0; color: white;">
                Editar Campeón de League of Legends
            </h1>

            <form action="{{ route('champs.update', $champs->id) }}" method="post" class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-md mt-4">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-2 gap-6 mb-4">
                    <div class="flex flex-col">
                        <label style="font-size: 18px; font-weight: bold" for="name">Campeón</label>
                        <select class="p-2 mt-2 bg-cyan-200 border border-gray-300 rounded-lg" name="name">
                            <option value="{{ $champs->name }}">{{$champs->name}}</option>
                        </select>
                    </div>
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

    @guest()
        <h1>NO TENDRÍAS QUE ESTAR AQUI</h1>
    @endguest
</x-layouts.layout>
