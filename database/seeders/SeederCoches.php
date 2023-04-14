<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederCoches extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coches')->insert([
            ['modelo' => 'Opel', 'matricula' => '0987QQQ', 'usuario_dni' => '62840983M'],
            ['modelo' => 'Peugeot', 'matricula' => '5820RRR', 'usuario_dni' => '74580425T']
        ]);
    }
}
