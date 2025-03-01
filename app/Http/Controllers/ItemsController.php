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

        $champs = Champs::all();
        return view('items.create', compact('itemNames', 'champs'));
    }

    public function store(Request $request)
    {
        $datos = $request->only("name", "damage", "id_champs");
        $items = new Items($datos);
        $items->name = $datos['name'];
        $items->damage = $datos['damage'];
        $items->id_champs = $datos['id_champs'];
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

        return view('items.edit', compact('items', 'itemsList', 'champs'));
    }
    public function update(Request $request, $id)
    {
        // Depuración: Verifica los datos enviados en la solicitud
        // dd($request->all());

        $items = Items::findOrFail($id);

        // Actualizar el item existente
        $items->update([
            'name' => $request->input('name'),
            'damage' => $request->input('damage'),
            'id_champs' => $items->id_champs, // Mantener el mismo champ
        ]);

        // Añadir nuevos items si existen
        if ($request->has('new_items')) {
            foreach ($request->input('new_items') as $newItem) {
                if (!empty($newItem['name']) && !empty($newItem['damage'])) {
                    Items::create([
                        'name' => $newItem['name'],
                        'damage' => $newItem['damage'],
                        'id_champs' => $newItem['id_champs'], // Usar el id_champs del nuevo item
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
