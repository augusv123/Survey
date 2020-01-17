<?php

use Illuminate\Database\Seeder;

class TablaFamiliarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('familiar')->insert([
            [ 'tipo' => 'Hijo/a'],
            [ 'tipo' => 'Cónyuge'],
            [ 'tipo' => 'Concubino/a'],

        ]);
    }
    
}
