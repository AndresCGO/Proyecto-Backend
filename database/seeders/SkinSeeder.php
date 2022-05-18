<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skin;

class SkinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skin1 = new Skin();

        $skin1->nombre_imagen = "Elderflame.png";
        $skin1->nombre_paquete = "Elderflame";
        $skin1->armas = "Frenzy,Judge,Operator,Vandal,Meele";
        $skin1->precio = "10 700 PV (~$100)";

        $skin1->save();

        $skin2 = new Skin();

        $skin2->nombre_imagen = "Protocol.png";
        $skin2->nombre_paquete = "Protocol 781-A";
        $skin2->armas = "Bulldog,Phantom,Sheriff,Spectre,Melee";
        $skin2->precio = "10 700 PV (~$100)";

        $skin2->save();

        $skin3 = new Skin();

        $skin3->nombre_imagen = "BlastX.png";
        $skin3->nombre_paquete = "BlastX";
        $skin3->armas = "Frenzy,Odin,Phantom,Spectre,Meele";
        $skin3->precio = "10 700 PV (~$100)";

        $skin3->save();

        $skin4 = new Skin();

        $skin4->nombre_imagen = "Glitchpop.png";
        $skin4->nombre_paquete = "Glitchpop";
        $skin4->armas = "Frenzy,Judge,Bulldog,Odin,Meele";
        $skin4->precio = "10 700 PV (~$100)";

        $skin4->save();
    }
}
