<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'codprofesor'=>'1',
                'nomprofesor'=>'Luis Obeymar',
                'catprofesor'=>'Doctor'
            ],
            [
                'codprofesor'=>'2',
                'nomprofesor'=>'Paola Arturo',
                'catprofesor'=>'Doctora'
            ],
            [
                'codprofesor'=>'3',
                'nomprofesor'=>'Franklin Jimenez',
                'catprofesor'=>'Magister'
            ],
            [
                'codprofesor'=>'4',
                'nomprofesor'=>'Juan Castillo',
                'catprofesor'=>'Magister'
            ],
            [
                'codprofesor'=>'5',
                'nomprofesor'=>'Luis Jimenez',
                'catprofesor'=>'Magister'
            ]
            ];
            
            DB::table('profesores')->insert($datos);
    }
}
