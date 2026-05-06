<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class userUpdate2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'name'=> 'Alex',
                'age'=> 30,
                'email'=>Str::random(10).'@gmail.com',
                'salary'=> 500,
                'password'=> Hash::make(192130)
            ],
            [
                'name'=>'Emma',
                'age'=> 30,
                'email'=>Str::random(10).'@gmail.com',
                'salary'=> 1000,
                'password'=> Hash::make(819631)
            ],
            [
                'name'=>'Michael',
                'age'=>30,
                'email'=>Str::random(10).'@gmail.com',
                'salary'=>299,
                'password'=>Hash::make('alkjd12')
            ]
        ]);
    }
}
