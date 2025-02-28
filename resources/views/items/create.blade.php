@auth()
    <h2>Objetos de League of Legends</h2>
    <form action="{{ route('items.store') }}" method="post">
        @csrf

        <!-- Selección de Campeón -->
        <label for="id_champs">Selecciona un Campeón</label>
        <select name="id_champs">
            @foreach($champs as $champ)
            <option value="{{ $champ->id }}">{{ $champ->name }}</option>
            @endforeach
        </select>

        <label for="name">Selecciona un Objeto</label>
        <select name="name">
            @foreach($itemNames as $name)
                <option value="{{ $name }}">{{ $name }}</option>
            @endforeach
        </select>

        <label for="damage">Daño</label>
        <select name="damage">
            <option value="+10dmg">+10dmg</option>
            <option value="+20dmg">+20dmg</option>
            <option value="+30dmg">+30dmg</option>
            <option value="+40dmg">+40dmg</option>
            <option value="+50dmg">+50dmg</option>
            <option value="+60dmg">+60dmg</option>
        </select>

        <button>Guardar</button>
    </form>
@endauth

@guest()
    <h1>NO TENDRÍAS QUE ESTAR AQUÍ</h1>
@endguest
