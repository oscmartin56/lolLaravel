<h2>Campeón de League of Legends</h2>
<form action="{{route('champs.store')}}" method="post">
    @csrf

    <label for="name">Nombre
    <input type="text" name="name">
    </label>
    <label for="region">Región
    <input type="text" name="region">
    </label>
    <label for="Rol">Rol
    <input type="text" name="Rol">
    </label>
    <label for="difficulty">Dificultad
    <input type="text" name="difficulty">
    </label>
    <label for="RPCost">Precio en RP
    <input type="text" name="RPCost">
    </label>
    <button>Guardar</button>
</form>
