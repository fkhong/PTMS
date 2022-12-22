<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lecturers')-> insert ([[
            'staffid' => 'L001',
            'name'=> 'Dr. Foong',
            'email'=> 'drfoong@gmail.com',
            'contact'=> '01124162415',
            'expertise'=>'Machine Learning',
            'student supervised'=>'Null',
        ],[
            'staffid' => 'L002',
            'name'=> 'Dr. Lim',
            'email'=> 'drlim@gmail.com',
            'contact'=> '0123456789',
            'expertise'=>'Artificial Intelligence',
            'student supervised'=>'Null',
        ]]);
    }
}

