<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class user_update_3 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'name'=>'Albert',
                'age'=>32,
                'email'=>Str::random(10).'@gmail.com',
                'salary'=>1200,
                'password'=>Hash::make(12321)
            ]
        ]);
    }
}
