<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlcaldiasTable extends Migration
{
    public function up()
    {
        Schema::create('alcaldias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        // Insertar datos precargados
        $alcaldias = [
            'Álvaro Obregón',
            'Azcapotzalco',
            'Benito Juárez',
            'Coyoacán',
            'Cuajimalpa de Morelos',
            'Cuauhtémoc',
            'Gustavo A. Madero',
            'Iztacalco',
            'Iztapalapa',
            'Magdalena Contreras',
            'Miguel Hidalgo',
            'Milpa Alta',
            'Tláhuac',
            'Tlalpan',
            'Venustiano Carranza',
            'Xochimilco'
        ];

        $now = now(); // Obtener la fecha y hora actual

        foreach ($alcaldias as $alcaldia) {
            DB::table('alcaldias')->insert([
                'nombre' => $alcaldia,
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
    }

    public function down()
    {
        Schema::dropIfExists('alcaldias');
    }
}