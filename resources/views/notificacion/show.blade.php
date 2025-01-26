@extends('adminlte::page')

@section('title', 'Notificaciones')

@section('content_header')
    <h1><strong>Estado de Fuerza</strong> <small>Ver detalles</small></h1>
@stop

@section('content')

<div class="card">

    <div class="card-header">

    </div>

    <div class="card-body">

        <div class="row">
            <div class="col-md-3">
                <p><strong>Nombre</strong></p>
                <p>{{ $notificacion->nombre }}</p>
            </div>
            <div class="col-md-3">
                <p><strong>E-mail</strong></p>
                <p>{{ $notificacion->email }}</p>
            </div>
        </div>
        
    </div>

    <div class="card-footer">
        <a href="{{ route('notificacionEdit', $notificacion->id) }}" class="btn btn-info btn-sm">EDITAR</a>


        <form id="form-eliminar" action="{{ route('notificacionDelete', $notificacion->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
        
        <button onclick="confirmarEliminacion()" class="btn btn-danger btn-sm">ELIMINAR</button>
        
        

    </div>

</div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <!-- SweetAlert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Ventana de confirmacion -->
    <script>
        function confirmarEliminacion() {
            // Mostrar la alerta de confirmación con SweetAlert
            Swal.fire({
                title: '¿ESTÁS SEGURO?',
                text: "¡No podrás revertir esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'CONFIRMAR',
                cancelButtonText: 'CANCELAR',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Si el usuario confirma, enviar el formulario
                    document.getElementById('form-eliminar').submit();
                }
            });
        }
    </script>

    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop