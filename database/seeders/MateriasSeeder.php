<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class MateriasSeeder extends Seeder
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
                'codmateria'=>'10',
                'nommateria'=>'DOADU',
                'cremateria'=> '3'
            ],
            [
                'codmateria'=>'20',
                'nommateria'=>'Emprendimiento',
                'cremateria'=> '2'
            ],
            [
                'codmateria'=>'30',
                'nommateria'=>'Calculo I',
                'cremateria'=> '4'
            ],
            [
                'codmateria'=>'40',
                'nommateria'=>'Matematicas',
                'cremateria'=> '3'
            ],
            [
                'codmateria'=>'50',
                'nommateria'=>'Pintura',
                'cremateria'=> '2'
            ]
            ];
            
            DB::table('materias')->insert($datos);
    }
}
