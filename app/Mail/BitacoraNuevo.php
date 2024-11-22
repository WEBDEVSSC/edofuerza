<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BitacoraNuevo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $bitacora;

    // Puedes pasarle datos al constructor
    public function __construct($bitacora)
    {
        $this->bitacora = $bitacora;
    }

    
    public function build()
    {
        return $this->markdown('emails.bitacora-nuevo') // la vista del correo
                    ->subject('Nuevo registro')
                    ->from('soportewebssc@gmail.com', 'Estado de Fuerza'); // Correo y nombre del remitente
    }
}
