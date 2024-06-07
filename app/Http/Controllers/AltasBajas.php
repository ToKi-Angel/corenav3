<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\Carreras;
use App\Models\Creditos;
use App\Models\Archivo;
use App\Models\Alcaldias;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;

class AltasBajas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth', 'Cache'])->only(['index', 'tabla', 'create', 'edit','eliminar']);
    }

    public function index()
    {
        $titulo = 'Inicio';
        $items = Alumnos::all();
        $carrera = Carreras::all();
        return view('/crud/index', compact('titulo', 'items'))->with('carrera', $carrera);
    }

    public function tabla()
    {
        $titulo = 'Información';
        $items = Alumnos::all();
        return view("misArchivos.tabla", compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Agregar';
        $carrera = Carreras::all();
        $alcaldias = Alcaldias::all();
        return view('/crud/create', compact('titulo', 'carrera', 'alcaldias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ini_set('post_max_size', '16M');
        /*// Validar que el numero_control no se repita
    $existingFolio = Alumnos::where('folio',  $request->folio)->first();
    if ($existingFolio) {
        // Si el numero_control ya existe, mostrar una alerta de SweetAlert
        Alert::error('ERROR', '¡El FOLIO ya existe!. Por favor, ingrese un FOLIO diferente.');
        return redirect()->back()->withInput($request->except('folio'));
    }
        // Validar que el numero_control no se repita
        $existingFolioAlt = Alumnos::where('folioAltetl', $request->folioAltetl)->first();
        if ($existingFolioAlt) {
            // Si el numero_control ya existe, mostrar una alerta de SweetAlert
            Alert::error('ERROR', '¡El FOLIO ALTETL ya existe!. Por favor, ingrese un FOLIO ALTETL diferente.');
            return redirect()->back()->withInput($request->except('folioAltetl'));
        }*/
        $item = new Alumnos();
        $item->nombre_productor = $request->nombre_productor; 
        $item->telefono_celular = $request->telefono_celular; // Asignar el teléfono celular
        $item->telefono = $request->telefono; // Asignar el teléfono
        $item->fecha_nacimiento = $request->fecha_nacimiento; // Asignar la fecha de nacimiento
        $item->sexo = $request->sexo; // Asignar el sexo
        $item->seccionElectoral = $request->seccionElectoral; // Asignar la sección electoral
        $item->alcaldia = $request->alcaldia; // Asignar la alcaldía
        $item->pueblo = $request->pueblo; // Asignar el pueblo
        $item->coloniaBarrio = $request->coloniaBarrio; // Asignar la colonia o barrio
        $item->codigoPostal = $request->codigoPostal; // Asignar el código postal
        $item->calle = $request->calle; // Asignar la calle
        
       /* $item->alcaldiaParcela = $request->alcaldiaParcela; // Asignar la alcaldía de la parcela
        $item->puebloParcela = $request->puebloParcela; // Asignar el pueblo de la parcela
        $item->superficie = $request->superficie; // Asignar la superficie
        $item->superficieTotal = $request->superficieTotal; // Asignar la superficie total
        $item->cultivo = $request->cultivo; // Asignar el cultivo
        $item->solicitante = $request->solicitante; // Asignar el solicitante
        $item->parcela_chinampa = $request->parcela_chinampa; // Asignar la parcela o chinampa
        $item->coordenadas = $request->coordenadas; // Asignar las coordenadas
        $item->coordenadasCentral = $request->coordenadasCentral; // Asignar las coordenadas centrales*/
        $item->save();
        Alert::success('Agregado', 'Se agregó correctamente');
        return redirect('/inicio');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = "Eliminar Alumnos";
        $items = Alumnos::find($id);
        $carreras = Carreras::all();
        return view("/crud/eliminar", compact('items', 'titulo', 'carreras'));
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = 'Actualizar datos';
        $items = Alumnos::find($id);
        $carreras = Carreras::all();
        $alcaldias = Alcaldias::all();
        return view("/crud/edit", compact('items', 'titulo', 'carreras', 'alcaldias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        ini_set('post_max_size', '16M');
        $item = Alumnos::find($id);
        $item->nombre_productor = $request->nombre_productor; 
        $item->telefono_celular = $request->telefono_celular; // Asignar el teléfono celular
        $item->telefono = $request->telefono; // Asignar el teléfono
        $item->fecha_nacimiento = $request->fecha_nacimiento; // Asignar la fecha de nacimiento
        $item->sexo = $request->sexo; // Asignar el sexo
        $item->seccionElectoral = $request->seccionElectoral; // Asignar la sección electoral
        $item->alcaldia = $request->alcaldia; // Asignar la alcaldía
        $item->pueblo = $request->pueblo; // Asignar el pueblo
        $item->coloniaBarrio = $request->coloniaBarrio; // Asignar la colonia o barrio
        $item->codigoPostal = $request->codigoPostal; // Asignar el código postal
        $item->calle = $request->calle; // Asignar la calle
        $item->save();



        Alert::success('Actualizado', 'Se actualizó correctamente');
        return redirect('/inicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Alumnos::find($id);
        $item->delete();
        Alert::error('Eliminado', 'Se eliminó correctamente');
        return redirect('/inicio');
    }

    /**
     * Guarda el archivo en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


  


    public function empresa()
    {
        $titulo = 'KRUSTY KRAB';
        return view('/empresa', compact('titulo'));
    }


}
