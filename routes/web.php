<?php

use App\Http\Controllers\EstadoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/estadoIndex',[EstadoController::class,'estadoIndex'])->name('estadoIndex');

Route::get('/estadoCreate',[EstadoController::class,'estadoCreate'])->name('estadoCreate');

Route::post('/estadoStore',[EstadoController::class,'estadoStore'])->name('estadoStore');

Route::get('/estadoShow/{id}',[EstadoController::class,'estadoShow'])->name('estadoShow');


Route::get('/summernote',[EstadoController::class,'summernote'])->name('summernote');
