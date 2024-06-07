<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\Compostas; // Importa el modelo Compostas
use App\Models\Alcaldias;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CompostasController extends Controller
{
    public function create($id)
    {
        $beneficiario = Alumnos::findOrFail($id);
        $alcaldias = Alcaldias::all();
        return view('compostas.create', compact('beneficiario', 'alcaldias'));
    }

    public function store(Request $request)
    {
        // Crea una nueva instancia del modelo Compostas
        $composta = new Compostas();

        // Asigna los valores del formulario a las propiedades del modelo
        $composta->nombre_productor = $request->nombre_productor;
        $composta->telefono_celular = $request->telefono_celular;
        $composta->telefono = $request->telefono;
        $composta->fecha_nacimiento = $request->fecha_nacimiento;
        $composta->sexo = $request->sexo;
        $composta->seccionElectoral = $request->seccionElectoral;
        $composta->alcaldia = $request->alcaldia;
        $composta->pueblo = $request->pueblo;
        $composta->coloniaBarrio = $request->coloniaBarrio;
        $composta->codigoPostal = $request->codigoPostal;
        $composta->calle = $request->calle;
        $composta->alcaldiaUbicacionParcela = $request->alcaldiaUbicacionParcela ?: 'N/A';
        $composta->puebloUbicacionParcela = $request->puebloUbicacionParcela ?: 'N/A';
        $composta->RegimenPropiedadUbicacionParcela = $request->RegimenPropiedadUbicacionParcela ?: 'N/A';
        $composta->NombreEjidoRegimenPropiedadParcela = $request->NombreEjidoRegimenPropiedadParcela ?: 'N/A';
        $composta->Paraje1RegimenPropiedadParcela = $request->Paraje1RegimenPropiedadParcela ?: 'N/A';
        $composta->TablaRegimenPropiedadParcela = $request->TablaRegimenPropiedadParcela ?: 'N/A';
        $composta->Numero2ParcelaRegimenPropiedadParcela = $request->Numero2ParcelaRegimenPropiedadParcela ?: 'N/A';
        $composta->NombreBienesComunalesRegimenPropiedadParcela = $request->NombreBienesComunalesRegimenPropiedadParcela ?: 'N/A';
        $composta->Paraje2RegimenPropiedadParcela = $request->Paraje2RegimenPropiedadParcela ?: 'N/A';
        $composta->NombrePropiedadPrivadaRegimenPropiedadParcela = $request->NombrePropiedadPrivadaRegimenPropiedadParcela ?: 'N/A';
        $composta->BarrioRegimenPropiedadParcela = $request->BarrioRegimenPropiedadParcela ?: 'N/A';
        $composta->Paraje3RegimenPropiedadParcela = $request->Paraje3RegimenPropiedadParcela ?: 'N/A';
        $composta->Numero3ParcelaRegimenPropiedadParcela = $request->Numero3ParcelaRegimenPropiedadParcela ?: 'N/A';
        $composta->SuperficieTotalPredio = $request->SuperficieTotalPredio ?: 'N/A';
        $composta->SuperficieProductiva = $request->SuperficieProductiva ?: 'N/A';
        $composta->CultivoPrincipal = $request->CultivoPrincipal ?: 'N/A';
        $composta->PropietarioOArrendado = $request->PropietarioOArrendado ?: 'N/A';
        $composta->NombreDueñoArrendado = $request->NombreDueñoArrendado ?: 'N/A';
        $composta->aX = $request->aX ?: '-';
        $composta->aY = $request->aY ?: '-';
        $composta->bX = $request->bX ?: '-';
        $composta->bY = $request->bY ?: '-';
        $composta->cX = $request->cX ?: '-';
        $composta->cY = $request->cY ?: '-';
        $composta->dX = $request->dX ?: '-';
        $composta->dY = $request->dY ?: '-';
        $composta->eX = $request->eX ?: '-';
        $composta->eY = $request->eY ?: '-';
        $composta->fX = $request->fX ?: '-';
        $composta->fY = $request->fY ?: '-';
        $composta->gX = $request->gX ?: '-';
        $composta->gY = $request->gY ?: '-';
        $composta->hX = $request->hX ?: '-';
        $composta->hY = $request->hY ?: '-';
        $composta->CoordenadaCentralX = $request->CoordenadaCentralX ?: '-';
        $composta->CoordenadaCentralY = $request->CoordenadaCentralY ?: '-';

        // Asigna los demás campos según corresponda

        // Guarda el modelo en la base de datos
        $composta->save();

        // Redirige a la ruta deseada después de guardar
        Alert::success('Agregado', 'Se agregó correctamente');
        return redirect('/inicio');
    }
}
