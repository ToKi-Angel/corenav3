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
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h2 class="text-center fw-bold fs-3">
                    <td class="icocod">&#10060;</td> Los datos a eliminar son:
                </h2>
                <br> <br>
                <a href="/" class="btn btn-block mt-3 col-12 agregarbotonestylo">
                    <td class="icocod">&#9194;</td> Regresar
                </a>
                <br> <br>
                
                <div class="alert alert-danger" role="alert">
                    <ul class="fs-3 mt-4 font-monospace">
                        <li>El nombre del productor: <span style="color: rgb(201, 2, 2);">{{ $items->nombre_productor }}</span></li>
                        <li>El teléfono celular es: <span style="color: rgb(201, 2, 2);">{{ $items->telefono_celular }}</span></li>
                        <li>El telefono fijo: <span style="color: rgb(201, 2, 2);">{{ $items->telefono}}</span></li>
                        <li>La fecha de nacimiento: <span style="color: rgb(201, 2, 2);">{{ $items->fecha_nacimiento }}</span></li>
                        <li>De sexo: <span style="color: rgb(201, 2, 2);">{{ $items->sexo }}</span></li>
                        <li>Sección Electoral: <span style="color: rgb(201, 2, 2);">{{ $items->seccionElectoral }}</span></li>
                        <li>De la alcaldía: <span style="color: rgb(201, 2, 2);">{{ $items->alcaldia }}</span></li>
                        <li>Del pueblo: <span style="color: rgb(201, 2, 2);">{{ $items->pueblo }}</span></li>
                        <li>De la colonia: <span style="color: rgb(201, 2, 2);">{{ $items->coloniaBarrio }}</span></li>
                        <li>Con el codigo postal: <span style="color: rgb(201, 2, 2);">{{ $items->codigoPostal }}</span></li>
                        <li>Y de calle y número: <span style="color: rgb(201, 2, 2);">{{ $items->calle }}</span></li>
                    </ul>
                </div>
                <form action="{{ route('destroy', $items->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mt-3">
                        <td class="icocod">&#10062;</td> Eliminar definitivamente
                    </button>
                </form>
            </div>
        </div>
        <br><br>
    </div>
@endsection