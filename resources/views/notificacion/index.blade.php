@extends('adminlte::page')

@section('title', 'Notificaciones')

@section('content_header')
    <h1><strong>Notificaciones</strong> <small>Panel de Control</small></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('notificacionCreate') }}" class="btn btn-info btn-sm">NUEVO REGISTRO</a>
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
                            <td>
                                
                            </td>
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