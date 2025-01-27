@extends('adminlte::page')

@section('title', 'Reportes')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1><strong>Reportes</strong> <small>Panel de Control</small></h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            
        </div>

        

        <div class="card-body">

            <form action="{{ route('estadoExport') }}" method="POST">

                @csrf
    
                <div class="row">
                    <div class="col-md-3">
                        <p><strong>Fecha de inicio</strong></p>
                        <input type="date" name="inicio" id="inicio" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <p><strong>Fecha de fin</strong></p>
                        <input type="date" name="fin" id="inicio" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <p>.</p>
                        <button type="submit" class="btn btn-info btn-sm btn-block">GENERAR EXCEL</button>
                    </div>
                </div>
    
            </form>
            


        </div>
        <div class="card-footer"></div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop