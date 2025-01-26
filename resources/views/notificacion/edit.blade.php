@extends('adminlte::page')

@section('title', 'Notificaciones')

@section('content_header')
    <h1><strong>Notificaciones</strong> <small>Editar registro</small></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('notificacionIndex') }}" class="btn btn-info btn-sm">PANEL DE CONTROL</a>
        </div>
        <form action="{{ route('notificacionUpdate', $notificacion->id) }}" method="POST">
        
        @csrf
        
        @method('PUT')
        
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <p>Nombre</p>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $notificacion->nombre) }}">
                    @error('nombre')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="col-md-3">
                    <p>E-mail</p>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $notificacion->email) }}">
                    @error('email')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info btn-sm">ACTUALIZAR</button>
        </div>
    </form>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop