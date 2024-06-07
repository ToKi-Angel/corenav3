@extends('layouts/main')
@section('contenido')
<style>
     .agregarbotonestylo{
    font-size: 1.0rem;
    color: #ffffff;
    background-color: #98989A;
    margin-right: 10px;
  }
</style>
    <p class="fs-2 text-center mt-4"><td class="icocod">&#128101;</td> Datos Del Productor</p>
    <a href="/" class="btn btn-block mt-3 col-12 agregarbotonestylo">
        <td class="icocod">&#9194;</td> Regresar
    </a>
    <form class="row g-3 fs-4" action="store" method="post">
        @csrf
        @method('POST')
        
        <div class="col-md-6 mt-4">
            <br>
            <label for="nombre_productor" class="form-label">Nombre del Productor <td class="icocod">&#128221;</td></label>
            <input type="text" name="nombre_productor" id="nombre_productor" class="form-control" required value="{{ old('nombre_productor') }}">
        </div>
        <div class="col-md-6 mt-4">
            <br>
            <label for="telefono_celular" class="form-label">Telefono Celular <td class="icocod">&#128241;</td></label>
            <input type="number" name="telefono_celular" id="telefono_celular" class="form-control" required value="{{ old('telefono_celular') }}" >
        </div>
        <div class="col-6 mt-4">
            <label for="telefono">Telefono Fijo <td class="icocod">&#128224;</td></label>
            <input type="number" name="telefono" id="telefono" class="form-control" required value="{{ old('telefono') }}">
        </div>
        <div class="col-6 mt-4">
            <label for="fecha_nacimiento"> Fecha de nacimiento <td class="icocod">&#128198;</td></label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required value="{{ old('fecha_nacimiento') }}">
        </div>
        <div class="col-6 mt-4">
            <label for="sexo">Sexo <td class="icocod">&#128107;</td></label>
            <select name="sexo" id="sexo" class="form-control" required>
                <option value="" disabled selected>Seleccione una opción</option>
                <option value="Masculino" {{ old('sexo') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Femenino" {{ old('sexo') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                <option value="Otro" {{ old('sexo') == 'Otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>
        <div class="col-6 mt-4">
            <label for="seccionElectoral">Sección Electoral <td class="icocod">&#127915;</td></label>
            <input type="text" name="seccionElectoral" id="seccionElectoral" class="form-control" required value="{{ old('seccionElectoral') }}">
        </div>
        <div class="col-md-6 mt-4">
            <label for="alcaldia">Alcaldía <td class="icocod">&#127961;</td></label>
            <select name="alcaldia" id="alcaldia" class="form-control" required>
                <option value="" disabled selected>Seleccione una opción</option>
                @foreach($alcaldias as $alcaldia)
                    <option value="{{ $alcaldia->nombre }}" {{ old('alcaldia') == $alcaldia->nombre ? 'selected' : '' }}>{{ $alcaldia->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-6 mt-4">
            <label for="pueblo">Pueblo <td class="icocod">&#127969;</td></label>
            <input type="text" name="pueblo" id="pueblo" class="form-control" required value="{{ old('pueblo') }}">
        </div>
        <div class="col-6 mt-4">
            <label for="coloniaBarrio">Colonia o Barrio<td class="icocod">&#127968;</td></label>
            <input type="text" name="coloniaBarrio" id="coloniaBarrio" class="form-control" required value="{{ old('coloniaBarrio') }}">
        </div>
        <div class="col-6 mt-4">
            <label for="codigoPostal">Codigo Postal <td class="icocod">&#128236;</td></label>
            <input type="number" name="codigoPostal" id="codigoPostal" class="form-control" required value="{{ old('codigoPostal') }}">
        </div>
        <div class="col-6 mt-4">
            <label for="calle">Calle y número<td class="icocod">&#128290;</td></label>
            <input type="text" name="calle" id="calle" class="form-control" required value="{{ old('calle') }}">
        </div>

        {{-- datos que son para otra tabla
            <div class="col-6 mt-4">
                <label for="fecha_ingreso">Fecha de la Solicitud <td class="icocod">&#128198;</td></label>
                <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" required value="{{ old('fecha_ingreso') }}">
            </div>
            <div class="col-6 mt-4">
                <label for="propiedad">propiedad FALTA MENU<td class="icocod">&#127745;</td></label>
                <input type="text" name="propiedad" id="propiedad" class="form-control" required>
            </div>
            <div class="col-6 mt-4">
                <label for="alcaldiaParcela">alcaldiaParcela <td class="icocod">&#127745;</td></label>
                <input type="text" name="alcaldiaParcela" id="alcaldiaParcela" class="form-control" required>
            </div>
            <div class="col-6 mt-4">
                <label for="puebloParcela">Pueblo Parcela<td class="icocod">&#127745;</td></label>
                <input type="text" name="puebloParcela" id="puebloParcela" class="form-control" required>
            </div>
            <div class="col-6 mt-4">
                <label for="superficie">superficie<td class="icocod">&#127745;</td></label>
                <input type="text" name="superficie" id="superficie" class="form-control" required>
            </div>
            <div class="col-6 mt-4">
                <label for="superficieTotal">superficieTotal<td class="icocod">&#127745;</td></label>
                <input type="text" name="superficieTotal" id="superficieTotal" class="form-control" required>
            </div>
            <div class="col-6 mt-4">
                <label for="cultivo">cultivo<td class="icocod">&#127745;</td></label>
                <input type="text" name="cultivo" id="cultivo" class="form-control" required>
            </div>
            <div class="col-6 mt-4">
                <label for="solicitante">solicitante<td class="icocod">&#127745;</td></label>
                <input type="text" name="solicitante" id="solicitante" class="form-control" required>
            </div>
            <div class="col-6 mt-4">
                <label for="parcela_chinampa">parcela_chinampa<td class="icocod">&#127745;</td></label>
                <input type="text" name="parcela_chinampa" id="parcela_chinampa" class="form-control" required>
            </div>
            <div class="col-6 mt-4">
                <label for="coordenadas">coordenadas<td class="icocod">&#127745;</td></label>
                <input type="text" name="coordenadas" id="coordenadas" class="form-control" required>
            </div>
            <div class="col-6 mt-4">
                <label for="coordenadasCentral">coordenadasCentral<td class="icocod">&#127745;</td></label>
                <input type="text" name="coordenadasCentral" id="coordenadasCentral" class="form-control" required>
            </div>
        --}}

        <div class="col-12">
            <button class="btn btn-primary mt-3">
                Guardar
            </button>
        </div> 
        <br>
        <br>   
    </form>
    
    
@endsection