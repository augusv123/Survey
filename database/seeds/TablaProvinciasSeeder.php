<?php

use Illuminate\Database\Seeder;

class TablaProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provincias =[ 
            [ 'nombre' =>  "Ciudad Autónoma de Buenos Aires" ],
[ 'nombre' =>  "Buenos Aires" ],
[ 'nombre' =>  "Catamara" ],
[ 'nombre' =>  "Córdoba" ],
[ 'nombre' =>  "Corrientes" ],
[ 'nombre' =>  "Entre Ríos" ],
[ 'nombre' =>  "Jujuy" ],
[ 'nombre' =>  "Mendoza" ],
[ 'nombre' =>  "La Rioja" ],
[ 'nombre' =>  "Salta" ],
[ 'nombre' =>  "San Juan" ],
[ 'nombre' =>  "San Luis" ],
[ 'nombre' =>  "Santa Fe" ],
[ 'nombre' =>  "Santiago del Estero" ],
[ 'nombre' =>  "Tucumán" ],
[ 'nombre' =>  "Chaco" ],
[ 'nombre' =>  "Chubut" ],
[ 'nombre' =>  "Formosa" ],
[ 'nombre' =>  "Misiones" ],
[ 'nombre' =>  "Neuquén" ],
[ 'nombre' =>  "La Pampa" ],
[ 'nombre' =>  "Río Negro" ],
[ 'nombre' =>  "Santa Cruz" ],
[ 'nombre' =>  "Tierra del Fuego" ],
        ];
        DB::table('provincias')->insert($provincias);
    }
}
