<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table-> text('cc',100);
            $table-> text('nombre',100);
            $table-> text('eps',100);
            $table-> text('fecha_cita',100)->nullable();
            $table-> enum("tipo_cita",["primera_dosis","segunda_dosis","Informativa","Prueba_Covid"])->default("Informativa");
            // Cedula, Nombre, EPS, Fecha de la cita, Tipo cita (enum->"Primera dosis", "Segunda dosis", "Informativa", "Prueba COVID")
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
        Schema::dropIfExists('citas');
    }
}
