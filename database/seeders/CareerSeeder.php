<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Career;
class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Career::create([
          'name' => 'Tecnicatura en Análisis y Desarrolo de Software',
         ]);
         Career::create([
            'name' => 'Tecnicatura en Administración Contable',
        ]);
        Career::create([
            'name' => 'Profesorado de Historia',
        ]);
        Career::create([
            'name' => 'Profesorado de Letras',
        ]);
        Career::create([
            'name' => 'Profesorado de Economía',
        ]);
        Career::create([
            'name' => 'Profesorado de Inglés',
        ]);
    }
}
