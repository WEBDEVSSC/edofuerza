<?php

use App\Http\Controllers\EstadoController;
use App\Http\Controllers\NotificacionController;
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

/**
 * 
 * 
 * NOTIFICACION
 * 
 * 
 */

 // Mostramos la lista de los correos de notificacion
 Route::get('admin/notificacion/index',[NotificacionController::class,'notificacionIndex'])->name('notificacionIndex');

 // Ruta para mostrar el formulario de registro
 Route::get('admin/notificacion/create',[NotificacionController::class,'notificacionCreate'])->name('notificacionCreate');

 // Ruta para almacenar los datos
 Route::post('admin/notificacion/store',[NotificacionController::class,'notificacionStore'])->name('notificacionStore');