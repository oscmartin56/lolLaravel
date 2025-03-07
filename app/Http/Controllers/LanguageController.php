<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function __invoke($locale)
    {
        // Verifica si el idioma está disponible
        $available_locales = config('languages');
        if (array_key_exists($locale, $available_locales)) {
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
