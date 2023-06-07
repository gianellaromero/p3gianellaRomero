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
        DB::table('careers')->insert([
            'name' => 'Tecnicatura en Análisis y Desarrolo de Software',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('careers')->insert([
            'name' => 'Tecnicatura en Administración Contable',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('careers')->insert([
            'name' => 'Profesorado de Historia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('careers')->insert([
            'name' => 'Profesorado de Letras',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('careers')->insert([
            'name' => 'Profesorado de Economía',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('careers')->insert([
            'name' => 'Profesorado de Inglés',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
