<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //
}
public function index($locale){
// App::setLocale($locale);
    session()->put('locale', $locale);
    logger("idioma ".$locale);
    return Redirect::back();
}
