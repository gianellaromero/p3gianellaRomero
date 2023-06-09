<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'Gianella',
            'lastname' => 'Romero',
            'dni' => '44152510',
            'birthdate'=>'2002-04-17',
            'status'=> '1',
        ]);
        Student::create([
            'name' => 'Bautista',
            'lastname' => 'Amarillo',
            'dni' => '2',
            'birthdate'=>'2001-10-18',
            'status'=> '1',
        ]);
        Student::create([
            'name' => 'Janice',
            'lastname' => 'Scolamieri',
            'dni' => '3',
            'birthdate'=>'2002-03-26',
            'status'=> '1',
        ]);
        Student::create([
            'name' => 'Mariano',
            'lastname' => 'Rivero',
            'dni' => '4',
            'birthdate'=>'2001-09-21',
            'status'=> '1',
        ]);
        Student::create([
            'name' => 'Gabriel',
            'lastname' => 'Lapeire',
            'dni' => '5',
            'birthdate'=>'2001-08-11',
            'status'=> '1',
        ]);
        Student::create([
            'name' => 'Lautaro',
            'lastname' => 'Olano',
            'dni' => '6',
            'birthdate'=>'2001-12-14',
            'status'=> '1',
        ]);
        
    }
}
