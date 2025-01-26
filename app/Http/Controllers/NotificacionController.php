<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    //

    public function notificacionIndex()
    {
        // Consultamos todos los registros
        $notificaciones = Notificacion::all();

        // Retornamos la vista con el arreglo
        return view('notificacion.index',compact('notificaciones'));
    }

    public function notificacionCreate()
    {
        return view('notificacion.create');
    }

    public function notificacionStore(Request $request)
    {
        // Validar los datos de la solicitud
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email|unique:notificaciones,email',
        ],[
            'nombre.required' => 'El campo es requerido',
            'email.required' => 'El campo es requerido',
            'email.unique' => 'El correo ya se encuentra registrado',
        ]);

        // Creamos la instancia
        $notificacion = new Notificacion();

        // Asignamos los campos
        $notificacion->nombre = $request->nombre;
        $notificacion->email = $request->email;

        // Guardamos el registro
        $notificacion->save();

        // Retornamos la vista
        return redirect()->route('notificacionIndex')->with('success', 'El correo se registro correctamente');
    }
}
