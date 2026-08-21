<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::view('/', 'inicio')-> name('inicio');
Route::view('/contacto', 'contacto')->name('contacto');
Route::post('/contacto/procesar', [ContactoController::class, 'procesar'])->name('contacto.procesar');
