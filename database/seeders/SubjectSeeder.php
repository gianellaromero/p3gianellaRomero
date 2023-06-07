<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Subject;
class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create([
            'name'=> 'Práctica Profesionalizante 3', 
        ]);
        Subject::create([
            'name'=> 'Análisis Y Diseño de Sistemas 2', 
        ]);
        Subject::create([
            'name'=> 'Derechos Humanos y Ciudadanía', 
        ]);
        Subject::create([
            'name'=> 'Programación 3', 
        ]);
        Subject::create([
            'name'=> 'Ingeniería de Software', 
        ]);
        Subject::create([
            'name'=> 'Probabilidad y Estadistica', 
        ]);
        Subject::create([
            'name'=> 'Programación Dispositivos Móviles', 
        ]);
        Subject::create([
            'name'=> 'Auditoría de Sistemas', 
        ]);
    }
}
