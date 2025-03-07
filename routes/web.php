<?php

use App\Http\Controllers\ChampsController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\LanguageController;

//RUTA DEL HOME
Route::view("/","home")->name("home");

//RUTA DE LOS CHAMPS
Route::get('champs',[ChampsController::class,'index'])->name('champs.index');
Route::get('champs/create',[ChampsController::class,'create'])->name('champs.create');
Route::post('champs',[ChampsController::class,'store'])->name('champs.store');
Route::delete('champs/{id}', [ChampsController::class, 'destroy'])->name('champs.destroy');
Route::get('champs/{id}/edit', [ChampsController::class, 'edit'])->name('champs.edit');
Route::put('champs/{id}', [ChampsController::class, 'update'])->name('champs.update');

//RUTA DE LOS ITEMS
Route::get('items/{id}/edit', [ItemsController::class, 'edit'])->name('items.edit');
Route::put('items/{id}', [ItemsController::class, 'update'])->name('items.update');
Route::get('items',[ItemsController::class,'index'])->name('items.index');
Route::get('items/create',[ItemsController::class,'create'])->name('items.create');
Route::post('items',[ItemsController::class,'store'])->name('items.store');
Route::delete('items/{id}', [ItemsController::class, 'destroy'])->name('items.destroy');

//Lenguajes
Route::get('language/{locale}',
    LanguageController:: class)->name('language');

//RUTA DEL LOGIN
Route::get('/dashboard', function () {
    return view('/home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
