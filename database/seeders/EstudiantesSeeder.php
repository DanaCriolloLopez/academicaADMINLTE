<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EstudiantesSeeder extends Seeder
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
                'codestudiante'=>'1000',
                'nomestudiante'=>'Emmanuel Rosero',
                'edaestudiante'=>'19',
                'fechestudiante'=>'1999-01-01',
                'sexestudiante'=>'M',
                'ciudad'=>'10',
                'barrio'=>'10',
                'programa'=>'1'
            ],
            [
                'codestudiante'=>'2000',
                'nomestudiante'=>'Esteban Rosero',
                'edaestudiante'=>'20',
                'fechestudiante'=>'1999-01-01',
                'sexestudiante'=>'M',
                'ciudad'=>'20',
                'barrio'=>'20',
                'programa'=>'2'
            ],
            [
                'codestudiante'=>'3000',
                'nomestudiante'=>'Sofia Moreno',
                'edaestudiante'=>'19',
                'fechestudiante'=>'1999-01-01',
                'sexestudiante'=>'F',
                'ciudad'=>'30',
                'barrio'=>'30',
                'programa'=>'3'
            ],
            [
                'codestudiante'=>'4000',
                'nomestudiante'=>'David Criollo',
                'edaestudiante'=>'21',
                'fechestudiante'=>'1999-01-01',
                'sexestudiante'=>'M',
                'ciudad'=>'40',
                'barrio'=>'40',
                'programa'=>'4'
            ],
            [
                'codestudiante'=>'5000',
                'nomestudiante'=>'Melissa Lopez',
                'edaestudiante'=>'20',
                'fechestudiante'=>'1999-01-01',
                'sexestudiante'=>'F',
                'ciudad'=>'50',
                'barrio'=>'50',
                'programa'=>'5'
            ]
            ];
            
            DB::table('estudiantes')->insert($datos);
    }
    
}
