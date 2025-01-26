<?php

namespace App\Exports;

use App\Models\Bitacora;
use Maatwebsite\Excel\Concerns\FromCollection;

class BitacoraExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bitacora::all();
    }

    // Ajustamos todos los encabezados
    public function headings(): array
    {
        
        return [
            'UNIDAD',
            'TURNO',
            'RESPONSABLE',            
        ];
    }

}
