<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    /**
     *  METODO PARA MOSTRAR TODOS LOS REGISTROS 
     */
    public function notificacionIndex()
    {
        // Consultamos todos los registros
        $notificaciones = Notificacion::all();

        // Retornamos la vista con el arreglo
        return view('notificacion.index',compact('notificaciones'));
    }

    /**
     *  METODO PARA MOSTRAR EL FORMULARIO DE REGISTRO
     */
    public function notificacionCreate()
    {
        return view('notificacion.create');
    }

    /**
     *  METODO PARA ALMACENAR LOS DATOS
     */
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

    /**
     *  METODO PARA MOSTRAR LOS DETALLES
     */
    public function notificacionShow($id)
    {
        // Buscamos el registro con el id
        $notificacion = Notificacion::findOrFail($id);

        // Retornamos la vista con el objeto
        return view('notificacion.show', compact('notificacion'));
    }       

    /**
     *  METODO PARA MOSTRAR EL FORMUALARIO DE EDICION
     */
    public function notificacionEdit($id)
    {
        // Buscamos el registro a editar
        $notificacion = Notificacion::findOrFail($id);

        // Regresamos a la vista con el objeto
        return view('notificacion.edit', compact('notificacion'));
    }

    /**
     *  METODO PARA ACTUALIZAR EL REGISTROS
     */
    public function notificacionUpdate(Request $request, $id)
    {
        // Validar los datos de la solicitud
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email|unique:notificaciones,email,' . $request->route('id'),
        ],[
            'nombre.required' => 'El campo es requerido',
            'email.required' => 'El campo es requerido',
            'email.unique' => 'El correo ya se encuentra registrado',
        ]);

        // Buscamo el registro
        $notificacion = Notificacion::findOrFail($id);

        // Asignamos los nuevos valores al registro
        $notificacion->update([
            'nombre'=>$validatedData['nombre'],
            'email'=>$validatedData['email']
        ]);

        // Retornamos la vista
        return redirect()->route('notificacionIndex')->with('update', 'Registro actualizado exitosamente.');
    }

    /**
     *  METODO PARA ELIMINAR EL REGISTROS
     */
    public function notificacionDelete($id)
    {
        // Buscamos el registro con el id
        $notificacion = Notificacion::findOrFail($id);

        // Eliminamos el registro
        $notificacion->delete();

        // Retornamos a la vista con el mensaje
        return redirect()->route('notificacionIndex')->with('delete','Registro eliminado exitosamente');
    }
}
