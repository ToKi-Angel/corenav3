<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->id();
            /*
            $table->string('folio')->unique();
            $table->string('folioAltetl');
            $table->string('nemeroCAC');
            $table->date('fecha_ingreso');
            * */

            /* Datos Generales del productor */
            $table->string('nombre_productor');
            $table->string('telefono_celular');
            $table->string('telefono');
            $table->date('fecha_nacimiento');
            $table->string('sexo');
            $table->string('seccionElectoral');
            /* Domicilio del productor */
            
            $table->string('alcaldia');
            $table->string('pueblo');
            $table->string('coloniaBarrio');
            $table->integer('codigoPostal');
            $table->string('calle');

           /*$table->string('alcaldiaParcela');
            $table->string('puebloParcela');
            $table->string('superficie');
            $table->string('superficieTotal');
            $table->string('cultivo');
            $table->string('solicitante');
            $table->string('parcela_chinampa');
            $table->string('coordenadas');
            $table->string('coordenadasCentral');*/
            $table->timestamps();
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiarios');
    }
}