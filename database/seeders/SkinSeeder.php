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

        $skin1->nombre_imagen="Elderflame.png";
        $skin1->nombre_paquete="Elderflame";
        $skin1->armas="Frenzy,Judge,Operator,Vandal,Meele";
        $skin1->precio="10700 PV (~$100)";

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

        $skin5 = new Skin();

        $skin5->nombre_imagen = "Spectrum.png";
        $skin5->nombre_paquete = "Spectrum";
        $skin5->armas = "Bulldog,Classic,Guardian,Phantom,Melee";
        $skin5->precio = "10 700 PV (~$100)";5

        $skin5->save();

        $skin6 = new Skin();

        $skin6->nombre_imagen = "RGX.png";
        $skin6->nombre_paquete = "RGX 11z Pro";
        $skin6->armas = "Frenzy,Vandal,Guardian,Stinger,Melee";
        $skin6->precio = "8700 PV (~$85)";56

        $skin6->save();

        $skin7 = new Skin();

        $skin7->nombre_imagen = "Ruination.png";
        $skin7->nombre_paquete = "Ruination";
        $skin7->armas = "Ghost,Guardian,Phantom,Spectre,Melee";
        $skin7->precio = "8700 PV (~$85)";56

        $skin7->save();

        $skin8 = new Skin();

        $skin8->nombre_imagen = "Singularity.png";
        $skin8->nombre_paquete = "Singularity";
        $skin8->armas = "Ares,Phantom,Sheriff,Spectre,Melee";
        $skin8->precio = "8700 PV (~$85)";56

        $skin8->save();

        $skin9 = new Skin();

        $skin9->nombre_imagen = "Sentinels.png";
        $skin9->nombre_paquete = "Sentinels of Light";
        $skin9->armas = "Ares,Operator,Sheriff,Vandal,Melee";
        $skin9->precio = "8700 PV (~$85)";56

        $skin9->save();
    }
}
