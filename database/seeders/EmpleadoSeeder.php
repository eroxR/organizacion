<?php

namespace Database\Seeders;

use App\Models\empleado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $empleado1 = new empleado();
        $empleado1->nombre="Pedro Pérez";
        $empleado1->email="pperez@example.co";
        $empleado1->sexo="M";
        $empleado1->area_id=5;
        $empleado1->boletin=1;
        $empleado1->descripcion="Hola mundo";
        $empleado1->save();

        $empleado2 = new empleado();
        $empleado2->nombre="Amalia Bayona";
        $empleado2->email="abayona@example.co";
        $empleado2->sexo="F";
        $empleado2->area_id=6;
        $empleado2->boletin=0;
        $empleado2->descripcion="Para contactar a Amalia Bayona, puede escribir al correo electrónico abayona@example.co";
        $empleado2->save();
    }
}
