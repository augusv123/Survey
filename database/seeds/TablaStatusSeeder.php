<?php

use Illuminate\Database\Seeder;

class TablaStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            [ 'status' => 'Completo'],
            [ 'status' => 'Incompleto'],
            [ 'status' => 'En Curso'],
            
            
        ]);
    }
}
