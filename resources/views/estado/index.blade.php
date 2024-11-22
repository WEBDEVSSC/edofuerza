@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><strong>Estado de Fuerza</strong> <small>Bitacoras</small></h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><strong>Especialidades</strong></h3>
    </div>
    <div class="card-body">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Unidad</th>
                    <th>Turno</th>
                    <th>Responsable</th>
                    <th>Registro</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bitacoras as $bitacora)
                    <tr>
                        <td>{{ $bitacora->unidad }}</td>
                        <td>{{ $bitacora->turno }}</td> 
                        <td>{{ $bitacora->responsable }}</td>
                        <td>{{ $bitacora->created_at->format('d-m-Y H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
    
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop