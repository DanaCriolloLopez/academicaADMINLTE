<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class RegnotasSeeder extends Seeder
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
                'estudiante' => '1000',
                'materia' => '10',
                'profesor' => '1',
                'parcial1' => '5',
                'parcial2' => '5',
                'efinal' => '5.0',
                'nfinal' => '5',
                'estado' => 'A'
            ],
            [
                'estudiante' => '2000',
                'materia' => '20',
                'profesor' => '2',
                'parcial1' => '3',
                'parcial2' => '3',
                'efinal' => '3',
                'nfinal' => '3',
                'estado' => 'A'
            ],
            [
                'estudiante' => '3000',
                'materia' => '30',
                'profesor' => '3',
                'parcial1' => '4',
                'parcial2' => '4',
                'efinal' => '4',
                'nfinal' => '4',
                'estado' => 'A'
            ],
            [
                'estudiante' => '4000',
                'materia' => '40',
                'profesor' => '4',
                'parcial1' => '2',
                'parcial2' => '2',
                'efinal' => '2',
                'nfinal' => '2',
                'estado' => 'R'
            ],
            [
                'estudiante' => '5000',
                'materia' => '50',
                'profesor' => '5',
                'parcial1' => '1',
                'parcial2' => '1',
                'efinal' => '1',
                'nfinal' => '1',
                'estado' => 'R'
            ]
            
            ];

            DB::table('regnotas')->insert($datos);
    }
}
