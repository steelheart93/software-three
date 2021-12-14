<?php

namespace Database\Seeders;

use App\Models\Cita;
use Illuminate\Database\Seeder;

class CitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cita = new Cita();
        $cita->cc = "1054994729";
        $cita->nombre = "Stiven Muñoz Murillo";
        $cita->eps = "Medimás";
        $cita->fecha_cita = now();
        $cita->tipo_cita = "segunda_dosis";
        $cita->save();

        $cita = new Cita();
        $cita->cc = "42098428";
        $cita->nombre = "Nubia Murillo Jimenez";
        $cita->eps = "Medimás";
        $cita->fecha_cita = now();
        $cita->tipo_cita = "prueba_covid";
        $cita->save();
    }
}
