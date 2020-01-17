<?php

use Illuminate\Database\Seeder;

class TablaEstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_civil')->insert([
            [ 'estado' => 'Casado/a'],
            [ 'estado' => 'Divorciado/a'],
            [ 'estado' => 'Soltero/a'],
            [ 'estado' => 'Viudo/a'],
            [ 'estado' => 'Concubino/a'],
            [ 'estado' => 'Separado/a'],

        ]);
        
    }
}
