@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1><strong>Estado de Fuerza</strong> <small>Bitacoras</small></h1>
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

@foreach ($bitacoras as $bitacora)

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><strong>{{ $bitacora->unidad }}</strong> <small>{{ $bitacora->turno }}</small></h3>
    </div>
    <div class="card-body">

        <!-- TRAUMATOLOGIA -->
        @if ($bitacora->traumatologia == "SI")
            <button class="btn btn-success btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Traumatología">
                <i class="fa-solid fa-crutch"></i>
            </button>
        @else
            <button class="btn btn-danger btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Traumatología">
                <i class="fa-solid fa-crutch"></i>
            </button>
        @endif

        <!-- MEDICINA INTERNA -->
        @if ($bitacora->medicina_interna == "SI")
            <button class="btn btn-success btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Médicina Interna">
                <i class="fa-solid fa-stethoscope"></i>
            </button>
        @else
            <button class="btn btn-danger btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Médicina Interna">
                <i class="fa-solid fa-stethoscope"></i>
            </button>
        @endif

        <!-- GINECOLOGIA -->
        @if ($bitacora->ginecologia == "SI")
            <button class="btn btn-success btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Ginecología">
                <i class="fa-solid fa-bed-pulse"></i>
            </button>
        @else
            <button class="btn btn-danger btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Ginecología">
                <i class="fa-solid fa-bed-pulse"></i>
            </button>
        @endif

        <!-- CIRUGIA -->
        @if ($bitacora->cirugia == "SI")
            <button class="btn btn-success btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Cirugía">
                <i class="fa-solid fa-prescription"></i>
            </button>
        @else
            <button class="btn btn-danger btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Cirugía">
                <i class="fa-solid fa-prescription"></i>
            </button>
        @endif

        <!-- CARDIOLOGIA -->
        @if ($bitacora->cardiologia == "SI")
            <button class="btn btn-success btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Cardiología">
                <i class="fa-solid fa-heart"></i>
            </button>
        @else
            <button class="btn btn-danger btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Cardiología">
                <i class="fa-solid fa-heart"></i>
            </button>
        @endif

        <!-- HEMODINAMIA -->
        @if ($bitacora->hemodinamia == "SI")
            <button class="btn btn-success btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Hemodinamia">
                <i class="fa-solid fa-droplet"></i>
            </button>
        @else
            <button class="btn btn-danger btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Hemodinamia">
                <i class="fa-solid fa-droplet"></i>
            </button>
        @endif

        <!-- PEDIATRIA -->
        @if ($bitacora->pediatria == "SI")
            <button class="btn btn-success btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Pediatria">
                <i class="fa-solid fa-person-breastfeeding"></i>
            </button>
        @else
            <button class="btn btn-danger btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Pediatria">
                <i class="fa-solid fa-person-breastfeeding"></i>
            </button>
        @endif

        <!-- UROLOGIA -->
        @if ($bitacora->urologia == "SI")
            <button class="btn btn-success btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="UrologÍa">
                <i class="fa-solid fa-user-nurse"></i>
            </button>
        @else
            <button class="btn btn-danger btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="UrologÍa">
                <i class="fa-solid fa-user-nurse"></i>
            </button>
        @endif

        <!-- NEUROLOGIA -->
        @if ($bitacora->neurologia == "SI")
            <button class="btn btn-success btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Neurología">
                <i class="fa-solid fa-brain"></i>
            </button>
        @else
            <button class="btn btn-danger btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Neurología">
                <i class="fa-solid fa-brain"></i>
            </button>
        @endif

        <!-- NEUROCIRUGIA -->
        @if ($bitacora->neurocirugia == "SI")
            <button class="btn btn-success btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Neurocirugía">
                <i class="fa-solid fa-head-side-virus"></i>
            </button>
        @else
            <button class="btn btn-danger btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Neurocirugía">
                <i class="fa-solid fa-head-side-virus"></i>
            </button>
        @endif

        <!-- ANESTESIOLOGIA -->
        @if ($bitacora->anestesiologia == "SI")
            <button class="btn btn-success btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Anestesiología">
                <i class="fa-solid fa-syringe"></i>
            </button>
        @else
            <button class="btn btn-danger btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Anestesiología">
                <i class="fa-solid fa-syringe"></i>
            </button>
        @endif

    </div>
    <div class="card-footer">
        {{ $bitacora->created_at->format('d-m-Y H:i:s') }}
    </div>
</div>

@endforeach
    
@stop

@section('css')
    {{-- Incluye Bootstrap CSS y Font Awesome --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
@stop

@section('js')
    {{-- Incluye Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Inicialización de Popovers --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
            popoverTriggerList.forEach(function (popoverTriggerEl) {
                new bootstrap.Popover(popoverTriggerEl);
            });
        });
    </script>
@stop
