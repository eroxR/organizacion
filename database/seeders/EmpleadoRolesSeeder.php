<?php

namespace Database\Seeders;

use App\Models\empleado_rol;
use App\Models\empleado_roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadoRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $empleado_rol1 = new empleado_roles();
        $empleado_rol1->empleado_id=1;
        $empleado_rol1->roles_id=4;
        $empleado_rol1->save();

        $empleado_rol2 = new empleado_roles();
        $empleado_rol2->empleado_id=1;
        $empleado_rol2->roles_id=5;
        $empleado_rol2->save();

        $empleado_rol3 = new empleado_roles();
        $empleado_rol3->empleado_id=1;
        $empleado_rol3->roles_id=2;
        $empleado_rol3->save();

        $empleado_rol4 = new empleado_roles();
        $empleado_rol4->empleado_id=2;
        $empleado_rol4->roles_id=1;
        $empleado_rol4->save();

        $empleado_rol5 = new empleado_roles();
        $empleado_rol5->empleado_id=2;
        $empleado_rol5->roles_id=2;
        $empleado_rol5->save();
    }
}
