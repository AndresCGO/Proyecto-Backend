<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App/Models/Skin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $skin = new Skin();

        $skin->nombre_imagen = "Elderflame.png";
        $skin->nombre_paquete = "Elderflame";
        $skin->armas = "Frenzy,Judge,Operator,Vandal,Meele";
        $skin->precio = "10 700 PV (~$100)";
    }
}
