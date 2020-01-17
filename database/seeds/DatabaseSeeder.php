<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TablaPaisesSeeder::class);
        $this->call(TablaNivelesSeeder::class);
        $this->call(TablaEstadoCivilSeeder::class);
        $this->call(TablaGradosSeeder::class);
        $this->call(TablaStatusSeeder::class);
        $this->call(TablaPicklist_IdiomasSeeder::class);
        $this->call(TablaPicklist_CodigosSeeder::class);
        $this->call(TablaPicklist_tipo_telSeeder::class);
        $this->call(TablaProvinciasSeeder::class);
        $this->call(TablaFamiliarSeeder::class);
        $this->call(TablaEspecialidadSeeder::class);
        

        
        
    }
}
