<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
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
                'coddepto'=>'10',
                'nomdepto'=>'Nariño'
            ],
            [
                'coddepto'=>'20',
                'nomdepto'=>'Antioquia'
            ],
            [
                'coddepto'=>'30',
                'nomdepto'=>'Santander'
            ],
            [
                'coddepto'=>'40',
                'nomdepto'=>'Arauca'
            ],
            [
                'coddepto'=>'50',
                'nomdepto'=>'Vichada'
            ]
            ];
            
            DB::table('departamentos')->insert($datos);
    }
}
