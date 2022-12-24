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
            'staffId' => 'L001',
            'name'=> 'Dr. Foong',
            'email'=> 'drfoong@gmail.com',
            'contact'=> '01124162415',
            'expertise'=>'Machine Learning',
            'studentSupervised1'=>'Null',
            'studentSupervised2'=>'Null',
            'studentSupervised3'=>'Null',
            'studentSupervised4'=>'Null',
        ],[
            'staffId' => 'L002',
            'name'=> 'Dr. Lim',
            'email'=> 'drlim@gmail.com',
            'contact'=> '0123456789',
            'expertise'=>'Artificial Intelligence',
            'studentSupervised1'=>'Null',
            'studentSupervised2'=>'Null',
            'studentSupervised3'=>'Null',
            'studentSupervised4'=>'Null',
        ],[
            'staffId' => 'L003',
            'name'=> 'Dr. Tan',
            'email'=> 'drtan@gmail.com',
            'contact'=> '0111111111',
            'expertise'=>'Mobile Application',
            'studentSupervised1'=>'Null',
            'studentSupervised2'=>'Null',
            'studentSupervised3'=>'Null',
            'studentSupervised4'=>'Null',
        ],[
            'staffId' => 'L004',
            'name'=> 'Dr. Ahmad',
            'email'=> 'drahmad@gmail.com',
            'contact'=> '0122222222',
            'expertise'=>'Data Security',
            'studentSupervised1'=>'Null',
            'studentSupervised2'=>'Null',
            'studentSupervised3'=>'Null',
            'studentSupervised4'=>'Null',
        ],[
            'staffId' => 'L005',
            'name'=> 'Dr. Amirul',
            'email'=> 'dramirul@gmail.com',
            'contact'=> '0133333333',
            'expertise'=>'Software Security',
            'studentSupervised1'=>'Null',
            'studentSupervised2'=>'Null',
            'studentSupervised3'=>'Null',
            'studentSupervised4'=>'Null',
        ],[
            'staffId' => 'L006',
            'name'=> 'Dr. Abdullah',
            'email'=> 'drabdullah@gmail.com',
            'contact'=> '0144444444',
            'expertise'=>'Internet of Things (IoT)',
            'studentSupervised1'=>'Null',
            'studentSupervised2'=>'Null',
            'studentSupervised3'=>'Null',
            'studentSupervised4'=>'Null',
        ],[
            'staffId' => 'L007',
            'name'=> 'Dr. Hafiq',
            'email'=> 'drhafiq@gmail.com',
            'contact'=> '0155555555',
            'expertise'=>'Data Science',
            'studentSupervised1'=>'Null',
            'studentSupervised2'=>'Null',
            'studentSupervised3'=>'Null',
            'studentSupervised4'=>'Null',
        ],[
            'staffId' => 'L008',
            'name'=> 'Dr. Danial',
            'email'=> 'drdanial@gmail.com',
            'contact'=> '0166666666',
            'expertise'=>'Internet of Things (IoT)',
            'studentSupervised1'=>'Null',
            'studentSupervised2'=>'Null',
            'studentSupervised3'=>'Null',
            'studentSupervised4'=>'Null',
        ],[
            'staffId' => 'L009',
            'name'=> 'Dr. Alexander',
            'email'=> 'dralexander@gmail.com',
            'contact'=> '0177777777',
            'expertise'=>'Data Mining',
            'studentSupervised1'=>'Null',
            'studentSupervised2'=>'Null',
            'studentSupervised3'=>'Null',
            'studentSupervised4'=>'Null',
        ],[
            'staffId' => 'L010',
            'name'=> 'Dr. Xavier',
            'email'=> 'drxavier@gmail.com',
            'contact'=> '0188888888',
            'expertise'=>'Artificial Intelligence',
            'studentSupervised1'=>'Null',
            'studentSupervised2'=>'Null',
            'studentSupervised3'=>'Null',
            'studentSupervised4'=>'Null',
        ],[
            'staffId' => 'L99',
            'name'=> 'Test',
            'email'=> 'Test',
            'contact'=> 'Test',
            'expertise'=>'Test',
            'studentSupervised1',
            'studentSupervised2',
            'studentSupervised3',
            'studentSupervised4',
        ]]);
    }
}

