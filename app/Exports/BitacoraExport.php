<?php

namespace App\Exports;

use App\Models\Bitacora;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BitacoraExport implements FromView
{
    
    protected $inicio;
    protected $fin;

    // Recibimos las fechas de inicio y fin
    public function __construct($inicio, $fin)
    {
        $this->inicio = $inicio;
        $this->fin = $fin;
    }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bitacora::all();
    }

    public function view(): View
    {
        // Filtramos los eventos por el rango de fechas
        $bitacoras = Bitacora::whereBetween('created_at', [$this->inicio, $this->fin])
                         ->orderBy('id', 'desc')
                         ->get();

        // Pasamos los eventos a la vista
        return view('estado.export', [
            'bitacoras' => $bitacoras
        ]);
        
    }

}
