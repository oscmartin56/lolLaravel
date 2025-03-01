<x-layouts.layout>
    <div style="display: flex; flex-direction: column; align-items: center; width: 70%; margin: 10px; border: 1px solid #ddd;">
        <div style="width: 100%; max-height: 400px; overflow-y: auto;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead style="position: sticky; top: 0; background-color: white; z-index: 10;">
                <tr>
                    <th>ID Campeón</th>
                    <th>Campeón</th>
                    <th>Región</th>
                    <th>Rol</th>
                    <th>Dificultad</th>
                    <th>Precio RP</th>
                    <th>Acciones</th>
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
                        <td>
                            <!-- Botón de eliminar -->
                            <form action="{{ route('champs.destroy', $champ->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="color: white; background-color: red; border-radius: 5px; padding: 5px 10px;">Eliminar</button>
                            </form>

                            <!-- Botón de actualizar -->
                            <a href="{{ route('champs.edit', $champ->id) }}" style="color: white; background-color: blue; border-radius: 5px; padding: 5px 10px; text-decoration: none;">Actualizar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Botón "Agregar" al centro -->
    <div style="display: flex; justify-content:center; width: 70%; margin-top: 10px; padding-right: 10px;">
        <a href="{{ route('champs.create') }}" style="color: greenyellow; background-color: #2563eb; border-radius: 15px; height: 50px; width: 120px; text-align: center; line-height: 50px; text-decoration: none;">Agregar</a>
    </div>

    <!-- Botón "Volver" alineado a la derecha en la parte inferior -->
    <div style="display: flex; justify-content: flex-end; width: 70%; margin-top: 20px;">
        <a href="{{ route('home') }}" style="color: ghostwhite; background-color: gray; border-radius: 15px; height: 50px; width: 120px; text-align: center; line-height: 50px; text-decoration: none;">
            Volver
        </a>
    </div>
</x-layouts.layout>
