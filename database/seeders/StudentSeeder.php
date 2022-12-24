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
            'psmTitle'=>'Null',
            'psmCategory'=>'Null',
            'supervisorName'=>'Null',
        ],[
            'matricNumber' => 'CB19049',
            'name'=> 'Chew Min Wei',
            'email'=> 'chewminwei@gmail.com',
            'course'=> 'BCS',
            'psmTitle'=>'Null',
            'psmCategory'=>'Null',
            'supervisorName'=>'Null',
        ],[
            'matricNumber' => 'CB19055',
            'name'=> 'Teo Voon Chuan',
            'email'=> 'teovoonchuan@gmail.com',
            'course'=> 'BCS',
            'psmTitle'=>'Null',
            'psmCategory'=>'Null',
            'supervisorName'=>'Null',
        ],[
            'matricNumber' => 'CB19091',
            'name'=> 'Loh Kin Ming',
            'email'=> 'lohkinming@gmail.com',
            'course'=> 'BCS',
            'psmTitle'=>'Null',
            'psmCategory'=>'Null',
            'supervisorName'=>'Null',
        ],[
            'matricNumber' => 'CB19037',
            'name'=> 'Lim Kah Chun',
            'email'=> 'limkahchun@gmail.com',
            'course'=> 'BCS',
            'psmTitle'=>'Null',
            'psmCategory'=>'Null',
            'supervisorName'=>'Null',
        ],[
            'matricNumber' => 'CB19039',
            'name'=> 'Loh Hin Ye',
            'email'=> 'lohhinye@gmail.com',
            'course'=> 'BCS',
            'psmTitle'=>'Null',
            'psmCategory'=>'Null',
            'supervisorName'=>'Null',
        ],[
            'matricNumber' => 'CB19082',
            'name'=> 'Koh Qing Zhe',
            'email'=> 'kohqingzhe@gmail.com',
            'course'=> 'BCS',
            'psmTitle'=>'Null',
            'psmCategory'=>'Null',
            'supervisorName'=>'Null',
        ]]);
    }
}

