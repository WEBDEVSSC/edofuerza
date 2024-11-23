@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><strong>Estado de Fuerza</strong> <small>Detalles</small></h1>
@stop

@section('content')

<div class="card">

    <div class="card-body">

        {{$bitacora->id}}
        
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