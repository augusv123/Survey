<?php

use Illuminate\Database\Seeder;

class TablaGradosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grados')->insert([
            [ 'grado' => 'Secundario'],
            [ 'grado' => 'Terciario'],
            [ 'grado' => 'Universitario'],
            [ 'grado' => 'Posgrado'],

        ]);
    }
}
