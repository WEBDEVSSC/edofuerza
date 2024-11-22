<?php

namespace App\Http\Controllers;

use App\Mail\BitacoraNuevo;
use App\Models\Bitacora;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function estadoIndex()
    {
        // Cargamos todos los registros de la tabla BITACORAS
        $bitacoras = Bitacora::all();

        // Regresamos la ruta
        return view('estado.index', compact('bitacoras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function estadoCreate()
    {
        // Regresamos la ruta
        return view('estado.create');
    }

    public function estadoStore(Request $request)
    {
        // Validamos los datos
        $validatedData = $request->validate([
        'traumatologia' => 'required',
        'medicina_interna' => 'required',
        'ginecologia' => 'required',
        'cirugia' => 'required',
        'cardiologia' => 'required',
        'hemodinamia' => 'required',
        'pediatria' => 'required',
        'urologia' => 'required',
        'neurologia' => 'required',
        'neurocirugia' => 'required',
        'anestesiologia' => 'required',
        
        'ucin' => 'required',
        'ucia' => 'required',
        'uti' => 'required',
        'toco' => 'required',
        'quirofano' => 'required',
        'hospital' => 'required',

        'urgencias' => 'required|integer',
        'urgencias_observaciones' => 'nullable|string|max:255',

        'cirugias_nombre_uno' => 'nullable|string|max:255',
        'cirugias_fecha_uno' => 'nullable|date',
        'cirugias_tipo_uno' => 'nullable|string|max:255',

        'cirugias_nombre_dos' => 'nullable|string|max:255',
        'cirugias_fecha_dos' => 'nullable|date',
        'cirugias_tipo_dos' => 'nullable|string|max:255',

        'cirugias_nombre_tres' => 'nullable|string|max:255',
        'cirugias_fecha_tres' => 'nullable|date',
        'cirugias_tipo_tres' => 'nullable|string|max:255',

        'cirugias_nombre_cuatro' => 'nullable|string|max:255',
        'cirugias_fecha_cuatro' => 'nullable|date',
        'cirugias_tipo_cuatro' => 'nullable|string|max:255',

        'cirugias_nombre_cinco' => 'nullable|string|max:255',
        'cirugias_fecha_cinco' => 'nullable|date',
        'cirugias_tipo_cinco' => 'nullable|string|max:255',

        'limpieza' => 'required',
        'limpieza_observaciones' => 'nullable|string|max:255',

        'seguridad' => 'required',
        'seguridad_observaciones' => 'nullable|string|max:255',
        ],[
        'traumatologia.required' => '* El campo TRAUMATOLOGÍA es requerido',
        'medicina_interna.required' => '* El campo MÉDICINA INTERNA es requerido',
        'ginecologia.required' => '* El campo GINECOLOGÍA es requerido',
        'cirugia.required' => '* El campo CIRUGÍA es requerido',
        'cardiologia.required' => '* El campo CARDIOLOGÍA es requerido',
        'hemodinamia.required' => '* El campo HEMODINAMIA es requerido',
        'pediatria.required' => '* El campo PEDIATRÍA es requerido',
        'urologia.required' => '* El campo UROLOGÍA es requerido',
        'neurologia.required' => '* El campo NEUROLOGÍA es requerido',
        'neurocirugia.required' => '* El campo NEUROCIRUGÍA es requerido',
        'anestesiologia.required' => '* El campo ANESTESIOLOGÍA es requerido',

        'ucin.required' => '* El campo UCIN es requerido',
        'ucia.required' => '* El campo UCIA es requerido',
        'uti.required' => '* El campo UTI es requerido',
        'toco.required' => '* El campo TOCO es requerido',
        'quirofano.required' => '* El campo QUIROFANO es requerido',
        'hospital.required' => '* El campo HOSPITAL es requerido',

        'urgencias.required' => '* El campo NÚMERO DE CAMAS DISPONIBLES es requerido',
        'urgencias.integer' => '* El campo NÚMERO DE CAMAS DISPONIBLES es tipo número',
        'urgencias_observaciones.string' => '* El campo es de tipo letras',

        'cirugias_nombre_uno.string' => '* El campo NOMBRE PACIENTE UNO es tipo CARACTER',
        'cirugias_nombre_uno.date' => '* El campo FECHA PACIENTE UNO es tipo FECHA',
        'cirugias_nombre_uno.max' => '* El campo NOMBRE PACIENTE UNO es demasiado largo',

        'cirugias_nombre_dos.string' => '* El campo NOMBRE PACIENTE DOS es tipo CARACTER',
        'cirugias_nombre_dos.date' => '* El campo FECHA PACIENTE DOS es tipo FECHA',
        'cirugias_nombre_dos.max' => '* El campo NOMBRE PACIENTE DOS es demasiado largo',

        'cirugias_nombre_tres.string' => '* El campo NOMBRE PACIENTE TRES es tipo CARACTER',
        'cirugias_nombre_tres.date' => '* El campo FECHA PACIENTE TRES es tipo FECHA',
        'cirugias_nombre_tres.max' => '* El campo NOMBRE PACIENTE TRES es demasiado largo',

        'cirugias_nombre_cuatro.string' => '* El campo NOMBRE PACIENTE CUATRO es tipo CARACTER',
        'cirugias_nombre_cuatro.date' => '* El campo FECHA PACIENTE CUATRO es tipo FECHA',
        'cirugias_nombre_cuatro.max' => '* El campo NOMBRE PACIENTE CUATRO es demasiado largo',

        'cirugias_nombre_cinco.string' => '* El campo NOMBRE PACIENTE CINCO es tipo CARACTER',
        'cirugias_nombre_cinco.date' => '* El campo FECHA PACIENTE CINCO es tipo FECHA',
        'cirugias_nombre_cinco.max' => '* El campo NOMBRE PACIENTE CINCO es demasiado largo',

        'limpieza.required' => '* El campo LIMPIEZA es requerido',
        'limpieza_observaciones.string' => '* El campo OBSERVACIONES es tipo caracter',
        'limpieza_observaciones.max' => '* El campo OBSERVACIONES es muy largo',

        'seguridad.required' => '* El campo SEGURIDAD es requerido',
        'seguridad_observaciones.string' => '* El campo OBSERVACIONES es tipo caracter',
        'seguridad_observaciones.max' => '* El campo OBSERVACIONES es muy largo',


        ]);

        // Consultamos los datos del usuario

        $userUnidad = Auth::user()->unidad;
        $userResponsable = Auth::user()->responsable;
        $userResponsableId = Auth::user()->id;
        $userTurno = Auth::user()->turno;

        // Generamos el registro
        $bitacora = new Bitacora();

        $bitacora->traumatologia = $request->traumatologia;
        $bitacora->medicina_interna = $request->medicina_interna;
        $bitacora->ginecologia = $request->ginecologia;
        $bitacora->cirugia = $request->cirugia;
        $bitacora->cardiologia = $request->cardiologia;
        $bitacora->hemodinamia = $request->hemodinamia;
        $bitacora->pediatria = $request->pediatria;
        $bitacora->urologia = $request->urologia;
        $bitacora->neurologia = $request->neurologia;
        $bitacora->neurocirugia = $request->neurocirugia;
        $bitacora->anestesiologia = $request->anestesiologia;

        $bitacora->ucin = $request->ucin;
        $bitacora->ucia = $request->ucia;
        $bitacora->uti = $request->uti;
        $bitacora->toco = $request->toco;
        $bitacora->quirofano = $request->quirofano;
        $bitacora->hospital = $request->hospital;

        $bitacora->urgencias = $request->urgencias;
        $bitacora->urgencias_observaciones = $request->urgencias_observaciones;

        $bitacora->cirugias_nombre_uno = $request->cirugias_nombre_uno;
        $bitacora->cirugias_fecha_uno = $request->cirugias_fecha_uno;
        $bitacora->cirugias_tipo_uno = $request->cirugias_tipo_uno;

        $bitacora->cirugias_nombre_dos = $request->cirugias_nombre_dos;
        $bitacora->cirugias_fecha_dos = $request->cirugias_fecha_dos;
        $bitacora->cirugias_tipo_dos = $request->cirugias_tipo_dos;

        $bitacora->cirugias_nombre_tres = $request->cirugias_nombre_tres;
        $bitacora->cirugias_fecha_tres = $request->cirugias_fecha_tres;
        $bitacora->cirugias_tipo_tres = $request->cirugias_tipo_tres;

        $bitacora->cirugias_nombre_cuatro = $request->cirugias_nombre_cuatro;
        $bitacora->cirugias_fecha_cuatro = $request->cirugias_fecha_cuatro;
        $bitacora->cirugias_tipo_cuatro = $request->cirugias_tipo_cuatro;

        $bitacora->cirugias_nombre_cinco = $request->cirugias_nombre_cinco;
        $bitacora->cirugias_fecha_cinco = $request->cirugias_fecha_cinco;
        $bitacora->cirugias_tipo_cinco = $request->cirugias_tipo_cinco;

        $bitacora->limpieza = $request->limpieza;
        $bitacora->limpieza_observaciones = $request->limpieza_observaciones;

        $bitacora->seguridad = $request->seguridad;
        $bitacora->seguridad_observaciones = $request->seguridad_observaciones;

        $bitacora->unidad = $userUnidad;
        $bitacora->responsable = $userResponsable;
        $bitacora->id_responsable = $userResponsableId;
        $bitacora->turno = $userTurno;

        $bitacora->save();

        // Enviamos el correo de alerta sobre el nuevo evento
        $destinatarios = ['cesartorres.1688@gmail.com','segundonivel.ssc@gmail.com'];
        Mail::to($destinatarios)->send(new BitacoraNuevo($bitacora));

        // Redireccionamos a la vista
        return redirect()->route('estadoIndex')->with('success', 'El evento se registro correctamente');


    }
}
