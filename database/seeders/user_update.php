<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class user_update extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'name'=>'Kiriill',
                'age'=>30,
                'email'=>Str::random(10).'@gmail.com',
                'salary'=>500,
                'password'=>Hash::make(rand(5)),
            ],
            [
                'name'=>'Alex',
                'age'=>23,
                'email'=>Str::random(10).'@gmail.com',
                'salary'=>700,
                'password'=>Hash::make(rand(5)),
            ],
            [
                'name'=>'Kiriill',
                'age'=>35,
                'email'=>Str::random(10).'@gmail.com',
                'salary'=>100,
                'password'=>Hash::make(rand(5)),
            ]
        ]);
    }
}
