<?php

namespace Database\Seeders;

use App\Models\roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles1 = new roles();
        $roles1->nombre="Desarrollador";
        $roles1->save();

        $roles2 = new roles();
        $roles2->nombre="Analista";
        $roles2->save();

        $roles3 = new roles();
        $roles3->nombre="Tester";
        $roles3->save();

        $roles4 = new roles();
        $roles4->nombre="Diseñador";
        $roles4->save();

        $roles5 = new roles();
        $roles5->nombre="Profesional PMO";
        $roles5->save();

        $roles6 = new roles();
        $roles6->nombre="Profesional de servicios";
        $roles6->save();

        $roles7 = new roles();
        $roles7->nombre="Auxiliar administrativo";
        $roles7->save();

        $roles8 = new roles();
        $roles8->nombre="Codirector";
        $roles8->save();
    }
}
