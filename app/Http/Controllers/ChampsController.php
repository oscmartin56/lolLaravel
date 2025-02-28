<?php

namespace App\Http\Controllers;

use App\Models\Champs;
use Illuminate\Http\Request;

class ChampsController extends Controller
{
    public function index()
    {
        $champs = Champs::all();
        return view('champs.index', compact( 'champs'));

    }
    public function create()
    {
        $jsonPath = database_path('factories/champs.json');
        $jsonData = file_get_contents($jsonPath);
        // Convertir JSON en array de PHP
        $champs = json_decode($jsonData, true);
        //Obtiene el nombre de los campeones
        $champNames = collect($champs)->pluck('name');

        return view('champs.create', compact('champNames'));

    }
    public function store(Request $request)
    {

        $datos = $request->only("name", "region", "Rol", "difficulty", "RPCost");
        $champ = new Champs($datos);
        $champ->save();

        session()->flash("mensaje", "Campeón $champ->name agregado");
        return redirect()->route('champs.index');
    }
    public function show(Champs $champs)
    {
        //
    }
    public function edit(Champs $champs)
    {
        //
    }
    public function update(Request $request, Champs $champs)
    {
        //
    }
    public function destroy(Champs $champs)
    {
        //
    }
}
