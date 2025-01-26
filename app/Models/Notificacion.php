<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    // Seleccionamos la tabla a utilizar
    protected $table = 'notificaciones';

     // Permite la asignación masiva de los campos 'nombre' y 'email'
     protected $fillable = ['nombre', 'email'];
}
