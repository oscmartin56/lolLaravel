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

        return view('items.index', compact('items','champs' ));
    }

    public function create()
    {
        $jsonPath = database_path('factories/items.json');
        $jsonData = file_get_contents($jsonPath);
        // Convertir JSON en array de PHP
        $items = json_decode($jsonData, true);
        //Obtiene el nombre de los campeones
        $itemNames = collect($items)->pluck('name');

        $champs = Champs::all();

        return view('items.create', compact('itemNames','champs'));

    }

    public function store(Request $request)
    {
        $datos = $request->only("name","damage","id_champs");
        $items = new Items($datos);
        $items->name = $datos['name'];
        $items->damage = $datos['damage'];
        $items->id_champs = $datos['id_champs'];
        $items->save();

        session()->flash("mensaje", "Campeón con item $items->name, agregado");
        return redirect()->route('items.index');
    }

    public function show(Items $items)
    {
        //
    }

    public function edit($id)
    {
        $items = Items::findOrFail($id);

        return view('items.edit', compact('items'));
    }

    public function update(Request $request,$id)
    {
        $items = Items::findOrFail($id);

        $items->update([
            'name' => $request->input('name'),
            'damage' => $request->input('damage'),
        ]);

        session()->flash("mensaje", "Campeón con $items->name actualizado");
        return redirect()->route('items.index');
    }

    public function destroy($id)
    {
        $items = Items::findOrFail($id);
        $items->delete();

        session()->flash("mensaje","Campeón con el item $items->name eliminado");
        return redirect()->route('items.index');
    }
}
