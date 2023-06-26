<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CiudadesSeeder extends Seeder
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
                'codciudad'=>'10',
                'nomciudad'=>'Pasto',
                'departamento'=>'10'
            ],
            [
                'codciudad'=>'20',
                'nomciudad'=>'Medellin',
                'departamento'=>'20'
            ],
            [
                'codciudad'=>'30',
                'nomciudad'=>'Bucaramanga',
                'departamento'=>'30'
            ],
            [
                'codciudad'=>'40',
                'nomciudad'=>'Arauca',
                'departamento'=>'40'
            ],
            [
                'codciudad'=>'50',
                'nomciudad'=>'Puerto Carreño',
                'departamento'=>'50'
            ]
            ];
            
            DB::table('ciudades')->insert($datos);
    }
}
