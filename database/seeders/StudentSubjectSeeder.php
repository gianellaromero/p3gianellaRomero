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
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '2', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '3', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '4', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '5', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '6', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '7', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '8', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '2',
            'subject_id' => '1', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '2',
            'subject_id' => '4', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
