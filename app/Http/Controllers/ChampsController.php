<?php

namespace App\Http\Controllers;

use App\Models\Champs;
use Illuminate\Http\Request;

class ChampsController extends Controller
{
    public function index()
    {
        $champs = Champs::all();
        return view('champs.index',compact('champs'));
    }
    public function create()
    {
        return view('champs.create');
    }
    public function store(Request $request)
    {
        Champs::create([
            'name' => request('name'),
            'region' => request('region'),
            'Rol' => request('Rol'),
            'difficulty' => request('difficulty'),
            'RPCost' => request('RPCost'),
        ]);
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
