<?php

namespace Database\Seeders;

use App\Models\area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class areaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $area1 = new area();
        $area1->nombre="Administrativa y Financiera";
        $area1->save();
        
        $area2 = new area();
        $area2->nombre="Ingeniería";
        $area2->save();
        
        $area3 = new area();
        $area3->nombre="Desarrollo de Negocio";
        $area3->save();

        $area4 = new area();
        $area4->nombre="Proyectos";
        $area4->save();
        
        $area5 = new area();
        $area5->nombre="Servicios";
        $area5->save();
        
        $area6 = new area();
        $area6->nombre="Calidad";
        $area6->save();
    }
}
