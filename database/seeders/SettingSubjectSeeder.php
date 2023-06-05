<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('setting_subjects')->insert([
            'subject_id' => '1',
            'day' => '1',
            'start_time' => '15:55:00',
            'end_time'=>'19:20:00',
            'limit_time'=> '17:50:00',
        ]);
        DB::table('setting_subjects')->insert([
            'subject_id' => '2',
            'day' => '1',
            'start_time' => '19:30:00',
            'end_time'=>'20:50:00',
            'limit_time'=> '20:10:00',
        ]);
        DB::table('setting_subjects')->insert([
            'subject_id' => '3',
            'day' => '2',
            'start_time' => '16:30:00',
            'end_time'=>'17:50:00',
            'limit_time'=> '17:10:00',
        ]);
        DB::table('setting_subjects')->insert([
            'subject_id' => '1',
            'day' => '2',
            'start_time' => '18:00:00',
            'end_time'=>'21:35:00',
            'limit_time'=> '19:40:00',
        ]);
        DB::table('setting_subjects')->insert([
            'subject_id' => '4',
            'day' => '3',
            'start_time' => '18:40:00',
            'end_time'=>'20:10:00',
            'limit_time'=> '19:40:00',
        ]);
        DB::table('setting_subjects')->insert([
            'subject_id' => '5',
            'day' => '3',
            'start_time' => '20:10:00',
            'end_time'=>'22:15:00',
            'limit_time'=> '21:35:00',
        ]);
        DB::table('setting_subjects')->insert([
            'subject_id' => '4',
            'day' => '4',
            'start_time' => '16:30:00',
            'end_time'=>'19:20:00',
            'limit_time'=> '18:00:00',
        ]);
        DB::table('setting_subjects')->insert([
            'subject_id' => '6',
            'day' => '5',
            'start_time' => '15:55:00',
            'end_time'=>'17:50:00',
            'limit_time'=> '16:30:00',
        ]);
        DB::table('setting_subjects')->insert([
            'subject_id' => '7',
            'day' => '5',
            'start_time' => '18:00:00',
            'end_time'=>'19:20:00',
            'limit_time'=> '18:45:00',
        ]);
        DB::table('setting_subjects')->insert([
            'subject_id' => '8',
            'day' => '5',
            'start_time' => '19:30:00',
            'end_time'=>'20:50:00',
            'limit_time'=> '20:10:00',
        ]);
        DB::table('setting_subjects')->insert([
            'subject_id' => '2',
            'day' => '5',
            'start_time' => '20:55:00',
            'end_time'=>'22:15:00',
            'limit_time'=> '21:25:00',
        ]);
        
    }
}
