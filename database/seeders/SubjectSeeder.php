<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            'name' => 'Práctica Profesionalizante 3',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Análisis Y Diseño de Sistemas 2',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Derechos Humanos y Ciudadanía',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Programación 3',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Ingeniería de Software',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Probabilidad y Estadistica',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Programación Dispositivos Móviles',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Auditoría de Sistemas',
        ]); 
    }
}
