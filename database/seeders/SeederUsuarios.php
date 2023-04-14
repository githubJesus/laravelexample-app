<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            ['dni' => '01256308Q', 'nombre' => 'Jesus', 'telefono' => '123456789'],
            ['dni' => '62840983M', 'nombre' => 'Marta', 'telefono' => '987654321'],
            ['dni' => '74580425T', 'nombre' => 'Carlos', 'telefono' => '638820079'],
            ['dni' => '38541142A', 'nombre' => 'Claudia', 'telefono' => '671058552']
        ]);
    }
}
