@extends('layouts/main')
@section('contenido')
<style>
    .agregarbotonestylo {
        font-size: 1.0rem;
        color: #ffffff;
        background-color: #98989A;
        margin-right: 10px;
    }
    .non-interactive-select {
        pointer-events: none;
        background-color: #f3f4f6;
        color: #6c757d; 
    }
</style>

<p class="fs-2 text-center mt-4">
    <td class="icocod">&#128101;</td> Datos Del Productor
</p>
<a href="/" class="btn btn-block mt-3 col-12 agregarbotonestylo">
    <td class="icocod">&#9194;</td> Regresar
</a>

<form class="row g-3 fs-4" action="{{ route('compostas.store') }}" method="post">
    @csrf
    @method('POST')

    <!-- Campo oculto para el ID del beneficiario -->
    <input type="hidden" name="beneficiario_id" value="{{ $beneficiario->id }}">

    <div class="col-md-6 mt-4">
        <br>
        <label for="nombre_productor" class="form-label">Nombre del Productor <td class="icocod">&#128221;</td></label>
        <input type="text" name="nombre_productor" id="nombre_productor" class="form-control non-interactive-select" required value="{{ $beneficiario->nombre_productor }}" readonly>
    </div>

    <div class="col-md-6 mt-4">
        <br>
        <label for="telefono_celular" class="form-label">Telefono Celular <td class="icocod">&#128241;</td></label>
        <input type="number" name="telefono_celular" id="telefono_celular" class="form-control non-interactive-select" required value="{{ $beneficiario->telefono_celular }}" readonly>
    </div>

    <div class="col-6 mt-4">
        <label for="telefono">Telefono Fijo <td class="icocod">&#128224;</td></label>
        <input type="number" name="telefono" id="telefono" class="form-control non-interactive-select" required value="{{ $beneficiario->telefono }}" readonly>
    </div>

    <div class="col-6 mt-4">
        <label for="fecha_nacimiento"> Fecha de nacimiento <td class="icocod">&#128198;</td></label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control non-interactive-select" required value="{{ $beneficiario->fecha_nacimiento }}" readonly>
    </div>

    <div class="col-6 mt-4">
        <label for="sexo">Sexo <td class="icocod">&#128107;</td></label>
        <select name="sexo" id="sexo" class="form-control non-interactive-select" required>
            <option value="" disabled selected>Seleccione una opción</option>
            <option value="Masculino" {{ $beneficiario->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
            <option value="Femenino" {{ $beneficiario->sexo == 'Femenino' ? 'selected' : '' }}>Femenino</option>
            <option value="Otro" {{ $beneficiario->sexo == 'Otro' ? 'selected' : '' }}>Otro</option>
        </select>
    </div>


    <div class="col-6 mt-4">
        <label for="seccionElectoral">Sección Electoral <td class="icocod">&#127915;</td></label>
        <input type="text" name="seccionElectoral" id="seccionElectoral" class="form-control non-interactive-select" required value="{{ $beneficiario->seccionElectoral }}" readonly>
    </div>

    <div class="col-md-6 mt-4">
        <label for="alcaldia">Alcaldía <td class="icocod">&#127961;</td></label>
        <select name="alcaldia" id="alcaldia" class="form-control non-interactive-select" required readonly>
            <option value="" disabled selected>Seleccione una opción</option>
            @foreach($alcaldias as $alcaldia)
                <option value="{{ $alcaldia->nombre }}" {{ $beneficiario->alcaldia == $alcaldia->nombre ? 'selected' : '' }}>{{ $alcaldia->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-6 mt-4">
        <label for="pueblo">Pueblo <td class="icocod">&#127969;</td></label>
        <input type="text" name="pueblo" id="pueblo" class="form-control non-interactive-select" required value="{{ $beneficiario->pueblo }}" readonly>
    </div>

    <div class="col-6 mt-4">
        <label for="coloniaBarrio">Colonia o Barrio <td class="icocod">&#127968;</td></label>
        <input type="text" name="coloniaBarrio" id="coloniaBarrio" class="form-control non-interactive-select" required value="{{ $beneficiario->coloniaBarrio }}" readonly>
    </div>

    <div class="col-6 mt-4">
        <label for="codigoPostal">Codigo Postal <td class="icocod">&#128236;</td></label>
        <input type="number" name="codigoPostal" id="codigoPostal" class="form-control non-interactive-select" required value="{{ $beneficiario->codigoPostal }}" readonly>
    </div>

    <div class="col-6 mt-4">
        <label for="calle">Calle y número <td class="icocod">&#128290;</td></label>
        <input type="text" name="calle" id="calle" class="form-control non-interactive-select" required value="{{ $beneficiario->calle }}" readonly>
    </div>

    <label for="">Ubicacion de la parcela o unidad productiva</label>

    
    <div class="col-6 mt-4">
        <label for="alcaldiaUbicacionParcela">Alcaldia</label>
        <input type="text" name="alcaldiaUbicacionParcela" id="alcaldiaUbicacionParcela" class="form-control" value="{{ old('alcaldiaUbicacionParcela') }}">
    </div>

    <div class="col-6 mt-4">
        <label for="puebloUbicacionParcela">Pueblo</label>
        <input type="text" name="puebloUbicacionParcela" id="puebloUbicacionParcela" class="form-control" value="{{ old('puebloUbicacionParcela') }}">
    </div>

    <div class="col-6 mt-4">
        <label for="RegimenPropiedadUbicacionParcela">Elige el regimen de propiedad de la parcela<td class="icocod">&#127745;</td></label>
        <select name="RegimenPropiedadUbicacionParcela" id="RegimenPropiedadUbicacionParcela" class="form-control" required>
            <option value="" disabled selected>Seleccione una opción</option>
            <option value="Masculino" {{ old('RegimenPropiedadUbicacionParcela') == 'Ejido' ? 'selected' : '' }}>Ejido</option>
            <option value="Femenino" {{ old('RegimenPropiedadUbicacionParcela') == 'BienesComunales' ? 'selected' : '' }}>Bienes comunales</option>
            <option value="Otro" {{ old('RegimenPropiedadUbicacionParcela') == 'PropiedadPrivada' ? 'selected' : '' }}>Propiedad privada</option>
        </select>
    </div>


    
    <label for="">Regimen de propiedad de la parcela</label>

    <div class="col-6 mt-4">
        <label for="NombreEjidoRegimenPropiedadParcela">Nombre del ejido</label>
        <input type="text" name="NombreEjidoRegimenPropiedadParcela" id="NombreEjidoRegimenPropiedadParcela" class="form-control" value="{{ old('NombreEjidoRegimenPropiedadParcela') }}">
    </div>

    <div class="col-6 mt-4">
        <label for="Paraje1RegimenPropiedadParcela">Paraje</label>
        <input type="text" name="Paraje1RegimenPropiedadParcela" id="Paraje1RegimenPropiedadParcela" class="form-control" value="{{ old('Paraje1RegimenPropiedadParcela') }}">
    </div>

    <div class="col-6 mt-4">
        <label for="TablaRegimenPropiedadParcela">Tabla</label>
        <input type="text" name="TablaRegimenPropiedadParcela" id="TablaRegimenPropiedadParcela" class="form-control" value="{{ old('TablaRegimenPropiedadParcela') }}">
    </div>

    <div class="col-6 mt-4">
        <label for="Numero2ParcelaRegimenPropiedadParcela">N° de parcela</label>
        <input type="text" name="Numero2ParcelaRegimenPropiedadParcela" id="Numero2ParcelaRegimenPropiedadParcela" class="form-control" value="{{ old('Numero2ParcelaRegimenPropiedadParcela') }}">
        <br>
        <br>
        <br>
    </div>

    <div class="col-6 mt-4">
        <label for="NombreBienesComunalesRegimenPropiedadParcela">Nombre de bienes comunales</label>
        <input type="text" name="NombreBienesComunalesRegimenPropiedadParcela" id="NombreBienesComunalesRegimenPropiedadParcela" class="form-control" value="{{ old('NombreBienesComunalesRegimenPropiedadParcela') }}">
    </div>

    <div class="col-6 mt-4">
        <label for="Paraje2RegimenPropiedadParcela">Paraje</label>
        <input type="text" name="Paraje2RegimenPropiedadParcela" id="Paraje2RegimenPropiedadParcela" class="form-control" value="{{ old('Paraje2RegimenPropiedadParcela') }}">
        <br>
        <br>
        <br>
    </div>

    <div class="col-6 mt-4">
        <label for="NombrePropiedadPrivadaRegimenPropiedadParcela">Nombre de la propiedad privada</label>
        <input type="text" name="NombrePropiedadPrivadaRegimenPropiedadParcela" id="NombrePropiedadPrivadaRegimenPropiedadParcela" class="form-control" value="{{ old('NombrePropiedadPrivadaRegimenPropiedadParcela') }}">
    </div>

    <div class="col-6 mt-4">
        <label for="BarrioRegimenPropiedadParcela">Barrio</label>
        <input type="text" name="BarrioRegimenPropiedadParcela" id="BarrioRegimenPropiedadParcela" class="form-control" value="{{ old('BarrioRegimenPropiedadParcela') }}">
    </div>

    <div class="col-6 mt-4">
        <label for="Paraje3RegimenPropiedadParcela">Paraje</label>
        <input type="text" name="Paraje3RegimenPropiedadParcela" id="Paraje3RegimenPropiedadParcela" class="form-control" value="{{ old('Paraje3RegimenPropiedadParcela') }}">
    </div>

    <div class="col-6 mt-4">
        <label for="Numero3ParcelaRegimenPropiedadParcela">N° de parcela</label>
        <input type="text" name="Numero3ParcelaRegimenPropiedadParcela" id="Numero3ParcelaRegimenPropiedadParcela" class="form-control" value="{{ old('Numero3ParcelaRegimenPropiedadParcela') }}">
        <br><br><br>
    </div>


    <label for="">Datos de la parcela</label>


    <div class="col-6 mt-4">
        <label for="SuperficieTotalPredio">Superficie total del predio (en mts. cuadrados)</label>
        <input type="text" name="SuperficieTotalPredio" id="SuperficieTotalPredio" class="form-control" value="{{ old('SuperficieTotalPredio') }}">
    </div>

    <div class="col-6 mt-4">
        <label for="SuperficieProductiva">Superficie productiva (en mts. cuadrados)</label>
        <input type="text" name="SuperficieProductiva" id="SuperficieProductiva" class="form-control" value="{{ old('SuperficieProductiva') }}">
    </div>

    <div class="col-6 mt-4">
        <label for="CultivoPrincipal">Cultivo(s) principal(es)</label>
        <input type="text" name="CultivoPrincipal" id="CultivoPrincipal" class="form-control" value="{{ old('CultivoPrincipal') }}">
    </div>
    
    <div class="col-6 mt-4">
        <label for="PropietarioOArrendado">¿El propietario(a) es dueño(a) o arrendatario(a) de la parcela? <td class="icocod">&#127745;</td></label>
        <select name="PropietarioOArrendado" id="PropietarioOArrendado" class="form-control" required>
            <option value="" disabled selected>Seleccione una opción</option>
            <option value="Masculino" {{ old('PropietarioOArrendado') == 'Propietario' ? 'selected' : '' }}>Propietario(a)</option>
            <option value="Femenino" {{ old('PropietarioOArrendado') == 'Arrendatario' ? 'selected' : '' }}>Arrendatario(a)</option>
        </select>
    </div>

    <div class="col-6 mt-4">
        <label for="NombreDueñoArrendado">En caso de ser arrendatario poner el nombre completo del dueño de la parcela o chinampa</label>
        <input type="text" name="NombreDueñoArrendado" id="NombreDueñoArrendado" class="form-control" value="{{ old('NombreDueñoArrendado') }}">
    </div>





    <div class="col-12">
        <button class="btn btn-primary mt-3">Guardar</button>
    </div>
    <br><br>
</form>
@endsection
