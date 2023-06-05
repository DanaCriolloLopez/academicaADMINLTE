<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class FacultadesSeeder extends Seeder
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
                'codfacultad'=>'10',
                'nomfacultad'=>'Artes'
            ],
            [
                'codfacultad'=>'20',
                'nomfacultad'=>'Ingeniería'
            ],
            [
                'codfacultad'=>'30',
                'nomfacultad'=>'Idiomas'
            ],
            [
                'codfacultad'=>'40',
                'nomfacultad'=>'Ciencias'
            ],
            [
                'codfacultad'=>'50',
                'nomfacultad'=>'Licenciaturas'
            ]
        ];

        DB::table('facultades')->insert($datos);
    }
}
