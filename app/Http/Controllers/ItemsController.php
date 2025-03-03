<?php

namespace App\Http\Controllers;

use App\Models\Champs;
use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Items::all();
        $champs = Champs::all();
        return view('items.index', compact('items', 'champs'));
    }

    public function create()
    {
        $jsonPath = database_path('factories/items.json');
        $jsonData = file_get_contents($jsonPath);
        // Convertir JSON en array de PHP
        $items = json_decode($jsonData, true);
        // Obtener el nombre de los objetos
        $itemNames = collect($items)->pluck('name');

        $existingItems = Items::pluck('name')->toArray();

        $champs = Champs::all();
        return view('items.create', compact('itemNames', 'champs','existingItems'));
    }

    public function store(Request $request)
    {
        $datos = $request->only("name", "damage", "id_champs");

        $items = new Items($datos);
        $items->save();

        session()->flash("mensaje", "Campeón con item $items->name agregado");
        return redirect()->route('items.index');
    }

    public function show(Items $items)
    {
    }

    public function edit($id)
    {
        $items = Items::findOrFail($id);

        // Leer el archivo JSON
        $jsonPath = database_path('factories/items.json');
        $jsonData = file_get_contents($jsonPath);
        $itemsList = json_decode($jsonData, true);

        // Traer todos los campeones para la selección
        $champs = Champs::all();

        $existingItems = Items::pluck('name')->toArray();

        return view('items.edit', compact('items', 'itemsList', 'champs','existingItems'));
    }
    public function update(Request $request, $id)
    {
        $items = Items::findOrFail($id);

        // Actualizar el item existente
        $items->update([
            'name' => $request->input('name'),
            'damage' => $request->input('damage'),
            'id_champs' => $items->id_champs,
        ]);

        // Verificar si hay nuevos items antes de crearlos
        if ($request->has('new_items')) {
            foreach ($request->input('new_items') as $newItem) {
                // Validar que el nuevo objeto tenga datos antes de crearlo
                if (!empty($newItem['name']) && !empty($newItem['damage'])) {
                    // Comprobar si el item ya existe en la base de datos
                    $itemExists = Items::where('name', $newItem['name'])->exists();

                    if ($itemExists) {
                        return redirect()->back()->withErrors(['error' => "El objeto '{$newItem['name']}' ya existe en la base de datos."]);
                    }

                    // Si no existe, se crea el nuevo item
                    Items::create([
                        'name' => $newItem['name'],
                        'damage' => $newItem['damage'],
                        'id_champs' => $items->id_champs,
                    ]);
                }
            }
        }

        session()->flash("mensaje", "Objeto $items->name actualizado");
        return redirect()->route('items.index');
    }


    public function destroy($id)
    {
        $items = Items::findOrFail($id);
        $items->delete();

        session()->flash("mensaje", "Objeto $items->name eliminado");
        return redirect()->route('items.index');
    }
}
