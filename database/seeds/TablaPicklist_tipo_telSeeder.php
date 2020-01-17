<?php

use Illuminate\Database\Seeder;

class TablaPicklist_tipo_telSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('picklist_tipo_tel')->insert(
            [
                [ 'tipo' =>  "Celular Personal" ],
                [ 'tipo' =>  "Celular Laboral" ],
                [ 'tipo' =>  "Domicilio" ],
                [ 'tipo' =>  "Oficina" ],
            ]
        );
        
    }
}
