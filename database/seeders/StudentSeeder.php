<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')-> insert ([[
            'matric number' => 'CB19053',
            'name'=> 'Foong Kin Hong',
            'email'=> 'foongkh@live.com',
            'course'=> 'BCS',
            'psm title'=>'Null',
            'supervisor name'=>'Null',
        ],[
            'matric number' => 'CB19049',
            'name'=> 'Chew Min Wei',
            'email'=> 'chewminwei@gmail.com',
            'course'=> 'BCS',
            'psm title'=>'Null',
            'supervisor name'=>'Null',
        ]]);
    }
}

