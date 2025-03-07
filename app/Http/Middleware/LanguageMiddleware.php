<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('locale'))
            App::setLocale(session()->get('locale'));
        else
            session()->put('locale',App::getLocale());
        return $next($request);
    }

}
