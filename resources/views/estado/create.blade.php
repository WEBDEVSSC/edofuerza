@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><strong>Estado de Fuerza</strong> <small>Nuevo registro</small></h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><strong>Especialidades</strong></h3>
    </div>
    <div class="card-body">

    <form action="{{ route('estadoStore') }}" method="POST">

        @csrf

    <!-- -------------------------------------------------------------- -->

    <div class="row">
        <div class="col-md-3">
            <p><strong>Traumatología</strong></p>
            <select name="traumatologia" id="traumatologia" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('traumatologia') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('traumatologia') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>            
        </div>
        <div class="col-md-3">
            <p><strong>Médicina Interna</strong></p>
            <select name="medicina_interna" id="medicina_interna" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('medicina_interna') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('medicina_interna') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div>
        <div class="col-md-3">
            <p><strong>Ginecología</strong></p>
            <select name="ginecologia" id="ginecologia" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('ginecologia') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('ginecologia') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div>
        <div class="col-md-3">
            <p><strong>Cirugía</strong></p>
            <select name="cirugia" id="cirugia" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('cirugia') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('cirugia') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-3">
            <p><strong>Cardiología</strong></p>
            <select name="cardiologia" id="cardiologia" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('cardiologia') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('cardiologia') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div>
        <div class="col-md-3">
            <p><strong>Hemodinamia</strong></p>
            <select name="hemodinamia" id="hemodinamia" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('hemodinamia') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('hemodinamia') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div>
        <div class="col-md-3">
            <p><strong>Pediatría</strong></p>
            <select name="pediatria" id="pediatria" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('pediatria') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('pediatria') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div>
        <div class="col-md-3">
            <p><strong>Urología</strong></p>
            <select name="urologia" id="urologia" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('urologia') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('urologia') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-md-3">
            <p><strong>Neurología</strong></p>
            <select name="neurologia" id="neurologia" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('neurologia') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('neurologia') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div>
        <div class="col-md-3">
            <p><strong>Neurocirugía</strong></p>
            <select name="neurocirugia" id="neurocirugia" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('neurocirugia') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('neurocirugia') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div>
        <div class="col-md-3">
            <p><strong>Anestesiología</strong></p>
            <select name="anestesiologia" id="anestesiologia" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('anestesiologia') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('anestesiologia') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div>
    </div>

    </div>
    <div class="card-footer">

        @error('traumatologia')<div class="text-danger">{{ $message }}</div>@enderror
        @error('medicina_interna')<div class="text-danger">{{ $message }}</div>@enderror
        @error('ginecologia')<div class="text-danger">{{ $message }}</div>@enderror
        @error('cirugia')<div class="text-danger">{{ $message }}</div>@enderror
        @error('cardiologia')<div class="text-danger">{{ $message }}</div>@enderror
        @error('hemodinamia')<div class="text-danger">{{ $message }}</div>@enderror
        @error('pediatria')<div class="text-danger">{{ $message }}</div>@enderror
        @error('urologia')<div class="text-danger">{{ $message }}</div>@enderror
        @error('neurologia')<div class="text-danger">{{ $message }}</div>@enderror
        @error('neurocirugia')<div class="text-danger">{{ $message }}</div>@enderror
        @error('anestesiologia')<div class="text-danger">{{ $message }}</div>@enderror

    </div>
</div>

    <!-- ------------------------------------------------------------ -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong>Servicios Disponibles</strong></h3>
        </div>
        <div class="card-body">

        <!-- -------------------------------------------------------------- -->

    <div class="row">   
        <div class="col-md-3">
            <p><strong>UCIN</strong></p>
            <select name="ucin" id="ucin" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('ucin') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('ucin') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div> 
        <div class="col-md-3">
            <p><strong>UCIA</strong></p>
            <select name="ucia" id="ucia" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('ucia') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('ucia') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <div class="col-md-3">
            <p><strong>UTI</strong></p>
            <select name="uti" id="uti" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('uti') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('uti') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div>
        <div class="col-md-3">
            <p><strong>TOCO</strong></p>
            <select name="toco" id="toco" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('toco') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('toco') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

    </div>

    <!-- ------------------------------------------------------------ -->

    <div class="row mt-3">

        <div class="col-md-3">
            <p><strong>Quirofano</strong></p>
            <select name="quirofano" id="quirofano" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('quirofano') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('quirofano') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div>
        
        <div class="col-md-3">
            <p><strong>Hospital</strong></p>
            <select name="hospital" id="hospital" class="form-control">
                <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                <option value="SI" {{ old('hospital') == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ old('hospital') == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
        </div>        
        
    </div>

    <!-- ------------------------------------------------------------ -->

        </div>

        <div class="card-footer">

            @error('ucin')<div class="text-danger">{{ $message }}</div>@enderror
            @error('ucia')<div class="text-danger">{{ $message }}</div>@enderror
            @error('uti')<div class="text-danger">{{ $message }}</div>@enderror
            @error('toco')<div class="text-danger">{{ $message }}</div>@enderror
            @error('quirofano')<div class="text-danger">{{ $message }}</div>@enderror
            @error('hospital')<div class="text-danger">{{ $message }}</div>@enderror
    
        </div>
    </div>

    <!-- ------------------------------------------------------------ -->
     <!-- ------------------------------------------------------------ -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong>Urgencias</strong></h3>
        </div>
        <div class="card-body">

         <!-- ------------------------------------------------------------ -->

        <div class="row">
            <div class="col-md-3">
                <p><strong>Número de camas disponibles</strong></p>
                <input type="number" id="urgencias" name="urgencias" class="form-control" value="{{ old('urgencias') }}">
            </div>
            <div class="col-md-9">
                <p><strong>Observaciones</strong></p>
                <input type="text" id="urgencias_observaciones" name="urgencias_observaciones" class="form-control" value="{{ old('urgencias_observaciones') }}">
            </div>
        </div>

        <!-- ------------------------------------------------------------ -->

        </div>

        <div class="card-footer">

            @error('urgencias')<div class="text-danger">{{ $message }}</div>@enderror
            @error('urgencias_observaciones')<div class="text-danger">{{ $message }}</div>@enderror
    
        </div>

    </div>

    <!-- ------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------ -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong>Cirugías</strong></h3>
        </div>
        <div class="card-body">

        <div class="row">
            <div class="col-md-6">
                <p><strong>Nombre</strong></p>
                <input type="text" id="cirugias_nombre_uno" name="cirugias_nombre_uno" class="form-control" value="{{ old('cirugias_nombre_uno') }}">
            </div>
            <div class="col-md-3">
                <p><strong>Fecha</strong></p>
                <input type="date" id="cirugias_fecha_uno" name="cirugias_fecha_uno" class="form-control" value="{{ old('cirugias_fecha_uno') }}">
            </div>
            <div class="col-md-3">
                <p><strong>Tipo</strong></p>
                <input type="text" id="cirugias_tipo_uno" name="cirugias_tipo_uno"  class="form-control" value="{{ old('cirugias_tipo_uno') }}">
            </div>
        </div>

        <!-- ------------------------------------------------------- -->

        <div class="row mt-3">
            <div class="col-md-6">
                <p><strong>Nombre</strong></p>
                <input type="text" id="cirugias_nombre_dos" name="cirugias_nombre_dos"  class="form-control" value="{{ old('cirugias_nombre_dos') }}">
            </div>
            <div class="col-md-3">
                <p><strong>Fecha</strong></p>
                <input type="date" id="cirugias_fecha_dos" name="cirugias_fecha_dos"  class="form-control" value="{{ old('cirugias_fecha_dos') }}">
            </div>
            <div class="col-md-3">
                <p><strong>Tipo</strong></p>
                <input type="text" id="cirugias_tipo_dos" name="cirugias_tipo_dos"  class="form-control" value="{{ old('cirugias_tipo_dos') }}">
            </div>
        </div>

        <!-- ------------------------------------------------------- -->

        <div class="row mt-3">
            <div class="col-md-6">
                <p><strong>Nombre</strong></p>
                <input type="text" id="cirugias_nombre_tres" name="cirugias_nombre_tres"  class="form-control" value="{{ old('cirugias_nombre_tres') }}">
            </div>
            <div class="col-md-3">
                <p><strong>Fecha</strong></p>
                <input type="date" id="cirugias_fecha_tres" name="cirugias_fecha_tres"  class="form-control" value="{{ old('cirugias_fecha_tres') }}">
            </div>
            <div class="col-md-3">
                <p><strong>Tipo</strong></p>
                <input type="text" id="cirugias_tipo_tres" name="cirugias_tipo_tres"  class="form-control" value="{{ old('cirugias_tipo_tres') }}">
            </div>
        </div>

        <!-- ------------------------------------------------------- -->

        <div class="row mt-3">
            <div class="col-md-6">
                <p><strong>Nombre</strong></p>
                <input type="text" id="cirugias_nombre_cuatro" name="cirugias_nombre_cuatro"  class="form-control" value="{{ old('cirugias_nombre_cuatro') }}">
            </div>
            <div class="col-md-3">
                <p><strong>Fecha</strong></p>
                <input type="date" id="cirugias_fecha_cuatro" name="cirugias_fecha_cuatro"  class="form-control" value="{{ old('cirugias_fecha_cuatro') }}">
            </div>
            <div class="col-md-3">
                <p><strong>Tipo</strong></p>
                <input type="text" id="	cirugias_tipo_cuatro" name="cirugias_tipo_cuatro"  class="form-control" value="{{ old('cirugias_tipo_cuatro') }}">
            </div>
        </div>

        <!-- ------------------------------------------------------- -->

        <div class="row mt-3">
            <div class="col-md-6">
                <p><strong>Nombre</strong></p>
                <input type="text" id="cirugias_nombre_cinco" name="cirugias_nombre_cinco"  class="form-control" value="{{ old('cirugias_nombre_cinco') }}">
            </div>
            <div class="col-md-3">
                <p><strong>Fecha</strong></p>
                <input type="date" id="cirugias_fecha_cinco" name="cirugias_fecha_cinco"  class="form-control" value="{{ old('cirugias_fecha_cinco') }}">
            </div>
            <div class="col-md-3">
                <p><strong>Tipo</strong></p>
                <input type="text" id="cirugias_tipo_cinco" name="cirugias_tipo_cinco"  class="form-control" value="{{ old('cirugias_tipo_cinco') }}">
            </div>
        </div>

        <!-- ------------------------------------------------------- -->

        </div>

        <div class="card-footer">

            @error('cirugias_nombre_uno')<div class="text-danger">{{ $message }}</div>@enderror
            @error('cirugias_fecha_uno')<div class="text-danger">{{ $message }}</div>@enderror
            @error('cirugias_tipo_uno')<div class="text-danger">{{ $message }}</div>@enderror

            @error('cirugias_nombre_dos')<div class="text-danger">{{ $message }}</div>@enderror
            @error('cirugias_fecha_dos')<div class="text-danger">{{ $message }}</div>@enderror
            @error('cirugias_tipo_dos')<div class="text-danger">{{ $message }}</div>@enderror

            @error('cirugias_nombre_tres')<div class="text-danger">{{ $message }}</div>@enderror
            @error('cirugias_fecha_tres')<div class="text-danger">{{ $message }}</div>@enderror
            @error('cirugias_tipo_tres')<div class="text-danger">{{ $message }}</div>@enderror

            @error('cirugias_nombre_cuatro')<div class="text-danger">{{ $message }}</div>@enderror
            @error('cirugias_fecha_cuatro')<div class="text-danger">{{ $message }}</div>@enderror
            @error('cirugias_tipo_cuatro')<div class="text-danger">{{ $message }}</div>@enderror

            @error('cirugias_nombre_cinco')<div class="text-danger">{{ $message }}</div>@enderror
            @error('cirugias_fecha_cinco')<div class="text-danger">{{ $message }}</div>@enderror
            @error('cirugias_tipo_cinco')<div class="text-danger">{{ $message }}</div>@enderror
    
        </div>

    </div>

    <!-- ------------------------------------------------------------ -->

    <!-- ------------------------------------------------------------ -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong>Limpieza</strong></h3>
        </div>
        <div class="card-body">
            
            <div class="row">
                <div class="col-md-3">
                    <p><strong>¿Cuenta con servicio?</strong></p>
                    <select name="limpieza" id="limpieza" class="form-control">
                        <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                        <option value="SI" {{ old('limpieza') == 'SI' ? 'selected' : '' }}>SI</option>
                        <option value="NO" {{ old('limpieza') == 'NO' ? 'selected' : '' }}>NO</option>
                    </select>

                </div>

                <div class="col-md-9">
                    <p><strong>Observaciones</strong></p>
                    <input type="text" class="form-control" name="limpieza_observaciones" id="limpieza_observaciones" value="{{ old('limpieza_observaciones') }}">
                </div>
            </div>

        </div>

        <div class="card-footer">

            @error('limpieza')<div class="text-danger">{{ $message }}</div>@enderror
            @error('limpieza_observaciones')<div class="text-danger">{{ $message }}</div>@enderror
    
        </div>
    </div>

    <!-- ------------------------------------------------------------ -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong>Seguridad</strong></h3>
        </div>
        <div class="card-body">
            
            <div class="row">
                <div class="col-md-3">
                    <p><strong>¿Cuenta con servicio?</strong></p>
                    <select name="seguridad" id="seguridad" class="form-control">
                        <option value="">-- SELECCIONE UNA OPCIÓN --</option>
                        <option value="SI" {{ old('seguridad') == 'SI' ? 'selected' : '' }}>SI</option>
                        <option value="NO" {{ old('seguridad') == 'NO' ? 'selected' : '' }}>NO</option>
                    </select>

                </div>

                <div class="col-md-9">
                    <p><strong>Observaciones</strong></p>
                    <input type="text" class="form-control" name="seguridad_observaciones" id="seguridad_observaciones" value="{{ old('seguridad_observaciones') }}">
                </div>
            </div>

        </div>

        <div class="card-footer">

            @error('seguridad')<div class="text-danger">{{ $message }}</div>@enderror
            @error('seguridad_observaciones')<div class="text-danger">{{ $message }}</div>@enderror
    
        </div>
    </div>

    <!-- ------------------------------------------------------------ -->

    <div class="row mt-3">
        <div class="col-md-12">
            <button type="submit" class="btn btn-success btn-sm">REGISTRAR DATOS</button>
        </div>
    </div>
    <!-- ------------------------------------------------------------ -->

    </form>   
    
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop