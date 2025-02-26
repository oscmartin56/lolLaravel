<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function __invoke(){
        $nombre ="David";
        $fecha =date("Y-m-d H:i:s");
//        return view ("index",["nombre"=>$nombre,"fecha"=>$fecha]);
        return view ("index",compact("nombre","fecha"));
    }
}
