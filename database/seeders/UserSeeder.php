<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')-> insert ([[
            'name' => 'Lecturer',
            'email'=> 'lecturer@gmail.com',
            'role'=> '1',
            'password'=> bcrypt('lecturer123'),
        ],[
            'name' => 'Supervisor',
            'email'=> 'supervisor@gmail.com',
            'role'=> '2',
            'password'=> bcrypt('supervisor123'),
        ],[
            'name' => 'Student',
            'email'=> 'student@gmail.com',
            'role'=> '0',
            'password'=> bcrypt('student123'),
        ]]);
    }
}
