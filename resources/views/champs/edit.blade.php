<x-layouts.layout>
    @auth()
        <h2>Editar Campeón de League of Legends</h2>
        <form action="{{ route('champs.update', $champs->id) }}" method="post">
            @csrf
            @method('PUT')

            <label for="name">Campeón</label>
            <select name="name">
                @foreach($champNames as $name)
                    <option value="{{ $name }}">{{ $name }}</option>
                @endforeach
            </select>

            <label for="region">Región</label>
            <select name="region">
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

            <label for="Rol">Rol</label>
            <select name="Rol">
                <option>Top Laner</option>
                <option>Jungla</option>
                <option>Mid Laner</option>
                <option>Ad Carry</option>
                <option>Support</option>
            </select>

            <label for="difficulty">Dificultad</label>
            <select name="difficulty">
                <option>Fácil</option>
                <option>Normal</option>
                <option>Dificil</option>
            </select>

            <label for="RPCost">Precio en RP</label>
            <select name="RPCost">
                <option>450</option>
                <option>1350</option>
                <option>3150</option>
                <option>4800</option>
                <option>6300</option>
                <option>7800</option>
            </select>

            <button class= "btn btn-sm btn-success"  type="submit">Actualizar </button>
            <a class= "btn btn-sm btn-success" href="{{route("champs.index")}}">Cancelar</a>
        </form>
    @endauth
    @guest()
        <h1>NO TENDRÍAS QUE ESTAR AQUI</h1>
    @endguest
</x-layouts.layout>
