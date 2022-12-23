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
            'matricNumber' => 'CB19053',
            'name'=> 'Foong Kin Hong',
            'email'=> 'foongkh@live.com',
            'course'=> 'BCS',
            'psmTitle'=>null,
            'psmCategory'=>null,
            'supervisorName'=>null,
        ],[
            'matricNumber' => 'CB19049',
            'name'=> 'Chew Min Wei',
            'email'=> 'chewminwei@gmail.com',
            'course'=> 'BCS',
            'psmTitle'=>null,
            'psmCategory'=>null,
            'supervisorName'=>null,
        ]]);
    }
}

