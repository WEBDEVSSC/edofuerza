<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITACORA</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>

</head>
<body>
    <h1>Secretaría de Salud de Coahuila | Estado de Fuerza</h1>
    <table>
        <thead>
            <tr>
                <th><strong>ID</strong></th>
                <th><strong>UNIDAD</strong></th>
                <th><strong>RESPONSABLE</strong></th>
                <th><strong>TURNO</strong></th>

                <th><strong>TRAUMATOLOGÍA</strong></th>
                <th><strong>MÉDICINA INTERNA</strong></th>
                <th><strong>GINECOLOGÍA</strong></th>
                <th><strong>CIRUGÍA</strong></th>
                <th><strong>CARDIOLOGÍA</strong></th>
                <th><strong>HEMODINAMIA</strong></th>
                <th><strong>PEDIATRÍA</strong></th>
                <th><strong>UROLOGÍA</strong></th>
                <th><strong>NEUROLOGÍA</strong></th>
                <th><strong>NEUROCIRUGÍA</strong></th>
                <th><strong>ANESTESIOLOGÍA</strong></th>

                <th><strong>UCIN</strong></th>
                <th><strong>UCIA</strong></th>
                <th><strong>UTI</strong></th>
                <th><strong>TOCO</strong></th>
                <th><strong>QUIROFANO</strong></th>
                <th><strong>HOSPITAL</strong></th>
                <th><strong>URGENCIAS CAMAS DISPONIBLES</strong></th>
                <th><strong>OBSERVACIONES</strong></th>

                <th><strong>CIR. NOMBRE</strong></th>
                <th><strong>CIR. FECHA</strong></th>
                <th><strong>CIR. TIPO</strong></th>

                <th><strong>CIR. NOMBRE</strong></th>
                <th><strong>CIR. FECHA</strong></th>
                <th><strong>CIR. TIPO</strong></th>

                <th><strong>CIR. NOMBRE</strong></th>
                <th><strong>CIR. FECHA</strong></th>
                <th><strong>CIR. TIPO</strong></th>

                <th><strong>CIR. NOMBRE</strong></th>
                <th><strong>CIR. FECHA</strong></th>
                <th><strong>CIR. TIPO</strong></th>

                <th><strong>CIR. NOMBRE</strong></th>
                <th><strong>CIR. FECHA</strong></th>
                <th><strong>CIR. TIPO</strong></th>


                <th><strong>LIMPIEZA</strong></th>
                <th><strong>OBSERVACIONES</strong></th>
                <th><strong>SEGURIDAD</strong></th>
                <th><strong>OBSERVACIONES</strong></th>                
                <th><strong>FECHA DE REGISTRO</strong></th>

            </tr>
        </thead>
        <tbody>
            @foreach($bitacoras as $bitacora)
                <tr>
                    <td>{{ $bitacora->id }}</td>
                    <td>{{ $bitacora->unidad }}</td>
                    <td>{{ $bitacora->responsable }}</td>
                    <td>{{ $bitacora->turno }}</td>

                    <td>{{ $bitacora->traumatologia }}</td>
                    <td>{{ $bitacora->medicina_interna }}</td>
                    <td>{{ $bitacora->ginecologia }}</td>
                    <td>{{ $bitacora->cirugia }}</td>
                    <td>{{ $bitacora->cardiologia }}</td>
                    <td>{{ $bitacora->hemodinamia }}</td>
                    <td>{{ $bitacora->pediatria }}</td>
                    <td>{{ $bitacora->urologia }}</td>
                    <td>{{ $bitacora->neurologia }}</td>
                    <td>{{ $bitacora->neurocirugia }}</td>
                    <td>{{ $bitacora->anestesiologia }}</td>
                    
                    <td>{{ $bitacora->ucin }}</td>
                    <td>{{ $bitacora->ucia }}</td>
                    <td>{{ $bitacora->uti }}</td>
                    <td>{{ $bitacora->toco }}</td>
                    <td>{{ $bitacora->quirofano }}</td>
                    <td>{{ $bitacora->hospital }}</td>
                    <td>{{ $bitacora->urgencias }}</td>
                    <td>{{ $bitacora->urgencias_observaciones }}</td>

                    <td>{{ $bitacora->cirugias_nombre_uno }}</td>
                    <td>{{ $bitacora->cirugias_fecha_uno }}</td>
                    <td>{{ $bitacora->cirugias_tipo_uno }}</td>

                    <td>{{ $bitacora->cirugias_nombre_dos }}</td>
                    <td>{{ $bitacora->cirugias_fecha_dos }}</td>
                    <td>{{ $bitacora->cirugias_tipo_dos }}</td>

                    <td>{{ $bitacora->cirugias_nombre_tres }}</td>
                    <td>{{ $bitacora->cirugias_fecha_tres }}</td>
                    <td>{{ $bitacora->cirugias_tipo_tres }}</td>

                    <td>{{ $bitacora->cirugias_nombre_cuatro }}</td>
                    <td>{{ $bitacora->cirugias_fecha_cuatro }}</td>
                    <td>{{ $bitacora->cirugias_tipo_cuatro }}</td>

                    <td>{{ $bitacora->cirugias_nombre_cinco }}</td>
                    <td>{{ $bitacora->cirugias_fecha_cinco }}</td>
                    <td>{{ $bitacora->cirugias_tipo_cinco }}</td>
                    
                    <td>{{ $bitacora->limpieza }}</td>
                    <td>{{ $bitacora->limpieza_observaciones }}</td>
                    <td>{{ $bitacora->seguridad }}</td>
                    <td>{{ $bitacora->seguridad_observaciones }}</td>

                    <td>{{ $bitacora->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
