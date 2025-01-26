@extends('adminlte::page')

@section('title', 'Notificaciones')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1><strong>Notificaciones</strong> <small>Panel de Control</small></h1>
@stop

@section('content')

@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Éxito',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'Ok'
            });
        });
    </script>
@endif

@if(session('update'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Éxito',
                text: "{{ session('update') }}",  // Usamos 'update' como la clave de la sesión
                icon: 'success',
                confirmButtonText: 'Ok'
            });
        });
    </script>
@endif

    <div class="card">
        <div class="card-header">
            <a href="{{ route('notificacionCreate') }}" class="btn btn-info btn-sm">NUEVO REGISTRO</a>
            <a href="{{ route('export') }}" class="btn btn-success">Exportar Clues a Excel</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($notificaciones as $notificacion)
                        <tr>
                            <td>{{ $notificacion->nombre }}</td>
                            <td>{{ $notificacion->email }}</td>
                            <td><a href="{{ route('notificacionShow', $notificacion->id) }}" class="btn btn-info btn-sm btn-block">DETALLES</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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