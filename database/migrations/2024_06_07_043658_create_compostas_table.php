<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compostas', function (Blueprint $table) {
            $table->id('folioCompostas');
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
            /* Ubicacion de la parcela o unidad productiva */
            $table->string('alcaldiaUbicacionParcela')->default('N/A');
            $table->string('puebloUbicacionParcela')->default('N/A');
            $table->string('RegimenPropiedadUbicacionParcela')->default('N/A');
            /* Regimen de propiedad de la parcela*/
            $table->string('NombreEjidoRegimenPropiedadParcela')->default('N/A');
            $table->string('Paraje1RegimenPropiedadParcela')->default('N/A');
            $table->string('TablaRegimenPropiedadParcela')->default('N/A');
            $table->string('Numero2ParcelaRegimenPropiedadParcela')->default('N/A');
            /** */
            $table->string('NombreBienesComunalesRegimenPropiedadParcela')->default('N/A');
            $table->string('Paraje2RegimenPropiedadParcela')->default('N/A');
            /** */
            $table->string('NombrePropiedadPrivadaRegimenPropiedadParcela')->default('N/A');
            $table->string('BarrioRegimenPropiedadParcela')->default('N/A');
            $table->string('Paraje3RegimenPropiedadParcela')->default('N/A');
            $table->string('Numero3ParcelaRegimenPropiedadParcela')->default('N/A');
            /* Datos de la parcela*/
            $table->string('SuperficieTotalPredio')->default('N/A');
            $table->string('SuperficieProductiva')->default('N/A');
            $table->string('CultivoPrincipal')->default('N/A');
            $table->string('PropietarioOArrendado')->default('N/A');
            $table->string('NombreDueñoArrendado')->default('N/A');
            /* Coordenadas del poligono (UTM)*/
            $table->string('aX')->default('-');
            $table->string('aY')->default('-');
            $table->string('bX')->default('-');
            $table->string('bY')->default('-');
            $table->string('cX')->default('-');
            $table->string('cY')->default('-');
            $table->string('dX')->default('-');
            $table->string('dY')->default('-');
            $table->string('eX')->default('-');
            $table->string('eY')->default('-');
            $table->string('fX')->default('-');
            $table->string('fY')->default('-');
            $table->string('gX')->default('-');
            $table->string('gY')->default('-');
            $table->string('hX')->default('-');
            $table->string('hY')->default('-');
            /* Coordenada Central (UTM)*/
            $table->string('CoordenadaCentralX')->default('-');
            $table->string('CoordenadaCentralY')->default('-');

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
        Schema::dropIfExists('compostas');
    }
}
