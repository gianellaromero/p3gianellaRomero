<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '1', 
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '2', 
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '3', 
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '4', 
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '5', 
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '6', 
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '7', 
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '8', 
        ]);
    }
}
