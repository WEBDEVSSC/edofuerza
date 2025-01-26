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

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>UNIDAD</th>
            <th>TURNO</th>
            <th class="vertical-text">Traumatología</th>
            <th class="vertical-text">Médicina Interna</th>
            <th class="vertical-text">Ginecología</th>
            <th class="vertical-text">Cirugía</th>
            <th class="vertical-text">Cardiología</th>
            <th class="vertical-text">Hemodinamia</th>
            <th class="vertical-text">Pediatría</th>
            <th class="vertical-text">Urología</th>
            <th class="vertical-text">Neurología</th>
            <th class="vertical-text">Neurocirugía</th>
            <th class="vertical-text">Anestesiología</th>
            <th class="vertical-text">UCIN</th>
            <th class="vertical-text">UCIA</th>
            <th class="vertical-text">UTI</th>
            <th class="vertical-text">TOCO</th>
            <th class="vertical-text">Quirofano</th>
            <th class="vertical-text">Hospital</th>
            <th class="vertical-text">URG. Camas DISP.</th>
            <th class="vertical-text">Cirugías</th>
            <th class="vertical-text">Limpieza</th>
            <th class="vertical-text">Seguridad</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bitacoras as $bitacora)
            <tr>
                <td><a href="{{ route('estadoShow', $bitacora->id) }}" class="btn btn-info btn-sm btn-block"><i class="fa-solid fa-circle-info text-white"></i></a></td>
                <td>{{ $bitacora->unidad }}<br><small>{{ $bitacora->created_at->format('d-m-Y H:i:s') }}</small></td>
                <td>{{ $bitacora->turno }}</td>
                <td>
                    @if ($bitacora->traumatologia == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->medicina_interna == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->ginecologia == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->cirugia == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->cardiologia == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->hemodinamia == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->pediatria == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->urologia == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->neurologia == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->neurocirugia == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->anestesiologia == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->ucin == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->ucia == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->uti == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->toco == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->quirofano == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->hospital == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->num_camas_disponibles == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->cirugias_nombre_uno !== null)
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->limpieza == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
                <td>
                    @if ($bitacora->seguridad == "SI")
                        <button class="btn btn-success btn-sm btn-block">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm btn-block">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@push('css')
    <style>
        .vertical-text {
            writing-mode: vertical-rl;
            transform: rotate(180deg);
            text-align: center;
            white-space: nowrap;
            text-transform: uppercase; 
        }
    </style>
@endpush
    
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
