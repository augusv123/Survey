<?php

use Illuminate\Database\Seeder;

class TablaPicklist_IdiomasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $idiomas =  [
            ['idioma' =>'AFRIKAANS'
        ],[ 
        'idioma' => 'TWI (GHANA)'
        ],[ 
        'idioma' => 'AMHARICO'
        ],[ 
        'idioma' => 'ARABE'
        ],[ 
        'idioma' => 'CHECO'
        ],[ 
        'idioma' => 'GALES'
        ],[ 
        'idioma' => 'DANES'
        ],[ 
        'idioma' => 'ALEMÁN'
        ],[ 
        'idioma' => 'GRIEGO'
        ],[ 
        'idioma' => 'INGLES'
        ],[ 
        'idioma' => 'ESPAÑOL'
        ],[ 
        'idioma' => 'PERSA'
        ],[ 
        'idioma' => 'FINLANDES'
        ],[ 
        'idioma' => 'FRANCES'
        ],[ 
        'idioma' => 'HEBREO' 
        ],[ 
        'idioma' => 'HINDI'
        ],[ 
        'idioma' => 'HUNGARO'
        ],[ 
        'idioma' => 'BAHASA'
        ],[ 
        'idioma' => 'ITALIANO'
        ],[ 
        'idioma' => 'JAPONES'
        ],[ 
        'idioma' => 'COREANO'
        ],[ 
        'idioma' => 'LATIN'
        ],[ 
        'idioma' => 'LAOSIANO'
        ],[ 
        'idioma' => 'LITUANO'
        ],[ 
        'idioma' => 'LETON'
        ],[ 
        'idioma' => 'MALAYO'
        ],[ 
        'idioma' => 'BIRMANO'
        ],[ 
        'idioma' => 'HOLANDES'
        ],[ 
        'idioma' => 'NORUEGO'
        ],[ 
        'idioma' => 'PUNYABI'
        ],[ 
        'idioma' => 'POLACO'
        ],[ 
        'idioma' => 'PORTUGUES'
        ],[ 
        'idioma' => 'RUMANO'
        ],[ 
        'idioma' => 'RUSO'
        ],[ 
        'idioma' => 'SERBO-CROATA'
        ],[ 
        'idioma' => 'SUECO'
        ],[ 
        'idioma' => 'SUAJILI'
        ],[ 
        'idioma' => 'TAMIL'
        ],[ 
        'idioma' => 'TELUGU'
        ],[ 
        'idioma' => 'TAILANDES'
        ],[ 
        'idioma' => 'TAGALO (FILIPINAS)'
        ],[ 
        'idioma' => 'TURCO'
        ],[ 
        'idioma' => 'UCRANIANO'
        ],[ 
        'idioma' => 'URDU (PAKISTAN)'
        ],[ 
        'idioma' => 'VIETNAMITA'
        ],[ 
        'idioma' => 'KISWAHILI'
        ],[ 
        'idioma' => 'LENGUAJE DE SIGNOS AMERICANO'
        ],[ 
        'idioma' => 'CHINO'
        ]
         ,
         ];
         DB::table('picklist_idiomas')->insert($idiomas);
    }
}
