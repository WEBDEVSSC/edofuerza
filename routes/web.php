<?php

use App\Http\Controllers\EstadoController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\ReporteController;
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

Route::post('/estadoExport', [EstadoController::class, 'estadoExport'])->name('estadoExport');

Route::get('/summernote',[EstadoController::class,'summernote'])->name('summernote');

/**
 * 
 * 
 * REPORTES
 * 
 * 
 */

 Route::get('/admin/reporte/index',[ReporteController::class,'index'])->name('reporteIndex');

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

 // Ruta para mostrar las opciones del registro
 Route::get('admin/notificacion/show/{id}',[NotificacionController::class,'notificacionShow'])->name('notificacionShow');

 // Ruta para editar el registro
 Route::get('admin/notificacion/edit/{id}',[NotificacionController::class,'notificacionEdit'])->name('notificacionEdit');

 // Ruta para actualizar los datos
 Route::put('admin/notificacion/update/{id}',[NotificacionController::class,'notificacionUpdate'])->name('notificacionUpdate');

 // Ruta para eliminar un registro
 Route::delete('admin/notificacion/delete/{id}',[NotificacionController::class,'notificacionDelete'])->name('notificacionDelete');