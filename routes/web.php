<?php

use App\Http\Controllers\ChampsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('/index',MainController::class);
Route::view("/","home")->name("home");

Route::get('champs',[ChampsController::class,'index'])->name('champs.index');
Route::get('champs/create',[ChampsController::class,'create'])->name('champs.create');
Route::post('champs',[ChampsController::class,'store'])->name('champs.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
