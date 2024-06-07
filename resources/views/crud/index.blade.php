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
    <p class="fs-2 text-center mt-4"></td> Beneficiarios </p>
    <a href="/crud/create" class=" btn agregarbotonestylo"><i class="icocod">&#10133;</i> Agregar Beneficiarios </a>
    <div class="card mt-4">
        <div class="card-body">
            <table id="tabla" class="display nowrap border border-dark mt-2" style="width:100%" >
                <thead>
                    <tr>
                        <th>Identificador</th>
                        <th>Nombre</th>
                        <th>Telefono Celular</th>
                        <th>Telefono fijo</th>
                        <th>Fecha de nacimiento</th>
                        <th>Sexo</th>
                        <th>Sección Electoral</th>
                        <th>Alcaldía</th>
                        <th>Pueblo</th>
                        <th>Colonia</th>
                        <th>Código Postal</th>
                        <th>Calle y número</th>

                        <th>Compostas</th>

                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nombre_productor }}</td>
                        <td>{{ $item->telefono_celular }}</td>            
                        <td>{{ $item->telefono }}</td>
                        <td>{{ $item->fecha_nacimiento }}</td>
                        <td>{{ $item->sexo }}</td>
                        <td>{{ $item->seccionElectoral }}</td>
                        <td>{{ $item->alcaldia }}</td>
                        <td>{{ $item->pueblo }}</td>
                        <td>{{ $item->coloniaBarrio }}</td>
                        <td>{{ $item->codigoPostal }}</td>
                        <td>{{ $item->calle }}</td>

                        <td> 
                            <a href="{{ route('compostas.create', ['id' => $item->id]) }}" class="btn btn-info"><i class="icocod">&#127808;</i> Compostas</a>
                        </td>



                        <td>
                            <a href="{{ route('edit', $item->id) }}" class="btn btn-warning"><i class="icocod">&#128221;</i> Editar</a>
                        </td>
                        <td> 
                            <a href="{{ route('show', $item->id) }}" class="btn btn-danger"><i class="icocod">&#9940;</i> Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
    
    <script>
        $(document).ready(function() {
            var table = $('#tabla').DataTable({
                scrollY: 450,
                deferRender: false,
                scroller: true,
                responsive: true,
                
            });
        });
    </script>
    
@endsection
