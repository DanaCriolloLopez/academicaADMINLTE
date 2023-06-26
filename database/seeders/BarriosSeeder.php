<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BarriosSeeder extends Seeder
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
                'codbarrio'=>'10',
                'nombarrio'=>'El rosario',
                'estbarrio'=>'1',
                'comuna'=>'10'
            ],
            [
                'codbarrio'=>'20',
                'nombarrio'=>'Miraflores',
                'estbarrio'=>'2',
                'comuna'=>'10'
            ],
            [
                'codbarrio'=>'30',
                'nombarrio'=>'Pandiaco',
                'estbarrio'=>'3',
                'comuna'=>'10'
            ],
            [
                'codbarrio'=>'40',
                'nombarrio'=>'San Juan de Dios',
                'estbarrio'=>'3',
                'comuna'=>'10'
            ],
            [
                'codbarrio'=>'50',
                'nombarrio'=>'Torobajo',
                'estbarrio'=>'2',
                'comuna'=>'10'
            ]
            ];
            
            DB::table('barrios')->insert($datos);
    }
}
