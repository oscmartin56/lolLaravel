<?php

use App\Http\Controllers\ChampsController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('/index',MainController::class);
Route::view("/","home")->name("home");

Route::get('champs',[ChampsController::class,'index'])->name('champs.index');
Route::get('champs/create',[ChampsController::class,'create'])->name('champs.create');
Route::post('champs',[ChampsController::class,'store'])->name('champs.store');
Route::delete('champs/{id}', [ChampsController::class, 'destroy'])->name('champs.destroy');
Route::delete('items/{id}', [ItemsController::class, 'destroy'])->name('items.destroy');
Route::get('champs/edit', [ChampsController::class, 'edit'])->name('champs.edit');
Route::put('champs', [ChampsController::class, 'update'])->name('champs.update');



Route::get('items',[ItemsController::class,'index'])->name('items.index');
Route::get('items/create',[ItemsController::class,'create'])->name('items.create');
Route::post('items',[ItemsController::class,'store'])->name('items.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
