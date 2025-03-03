<x-layouts.layout>
    @auth()
        <div class="bg-blue-300 min-h-screen p-4 flex flex-col items-center justify-start">
            <h1 style="font-weight: bold; font-family: Chalkboard, comic sans ms, 'sans-serif'; font-size: 32px; text-align: center; margin-bottom: 0; color: white;">
                Editar Objetos del Campeón de League of Legends
            </h1>

            <form action="{{ route('items.update', $items->id) }}" method="post" class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-md mt-4">
                @csrf
                @method('PUT')

                <!-- Editar objetos existentes -->
                <div class="grid grid-cols-2 gap-6 mb-4">
                    <div class="flex flex-col">
                        <label style="font-size: 18px; font-weight: bold" for="name">Objeto</label>
                        <select class="p-2 mt-2 bg-cyan-200 border border-gray-300 rounded-lg" name="name">
                            <option value="{{ $items->name }}" selected>{{ $items->name }}</option>
                            @foreach($itemsList as $item)
                                <option value="{{ $item['name'] }}"
                                    {{ in_array($item['name'], $existingItems) ? 'disabled' : '' }}>
                                    {{ $item['name'] }}
                                </option>
                            @endforeach
                        </select>

                    </div>

                    <div class="flex flex-col">
                        <label style="font-size: 18px; font-weight: bold" for="damage">Daño</label>
                        <select class="p-2 mt-2 bg-cyan-200 border border-gray-300 rounded-lg" name="damage">
                            <option value="{{ $items->damage }}" selected>{{ $items->damage }}</option>
                            <option value="+10dmg">+10dmg</option>
                            <option value="+20dmg">+20dmg</option>
                            <option value="+30dmg">+30dmg</option>
                            <option value="+40dmg">+40dmg</option>
                            <option value="+50dmg">+50dmg</option>
                            <option value="+60dmg">+60dmg</option>
                        </select>
                    </div>
                </div>

                <!-- Agregar nuevos objetos -->
                <div class="grid grid-cols-1 gap-6 mb-4">
                    <label style="font-size: 18px; font-weight: bold">Agregar nuevos objetos (opcional)</label>
                    <div id="new-items-container">
                        <div class="flex gap-4 mb-4">
                            <!-- Selección de nuevo objeto -->
                            <select name="new_items[0][name]" class="p-2 bg-cyan-200 border border-gray-300 rounded-lg">
                                <option value="">Seleccionar objeto</option>
                                @foreach($itemsList as $item)
                                    <option value="{{ $item['name'] }}"
                                        {{ in_array($item['name'], $existingItems) ? 'disabled' : '' }}>
                                        {{ $item['name'] }}
                                    </option>
                                @endforeach
                            </select>
                            <!-- Selección de daño para el nuevo objeto -->
                            <select name="new_items[0][damage]" class="p-2 bg-cyan-200 border border-gray-300 rounded-lg">
                                <option value="+10dmg">+10dmg</option>
                                <option value="+20dmg">+20dmg</option>
                                <option value="+30dmg">+30dmg</option>
                                <option value="+40dmg">+40dmg</option>
                                <option value="+50dmg">+50dmg</option>
                                <option value="+60dmg">+60dmg</option>
                            </select>
                            <!-- Campo oculto para id_champs -->
                            <input type="hidden" name="new_items[0][id_champs]" value="{{ $items->id_champs }}">
                        </div>
                    </div>
                </div>

                <!-- Botones de acción -->
                <div class="flex justify-between mt-4 space-x-4">
                    <button type="submit" class="w-full sm:w-auto p-3 bg-green-500 text-white rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                        Actualizar
                    </button>
                    <a class="w-full sm:w-auto p-3 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400" href="{{ route('items.index') }}">
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
