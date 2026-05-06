<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class user_update_4 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'name'=>'William',
                'age'=>29,
                'email'=>Str::random(10).'@gmail.com',
                'salary'=>2300,
                'password'=>Hash::make('12jkk')
            ],
            [
                'name'=>'Olivia',
                'age'=>18,
                'email'=>Str::random(10).'@gmail.com',
                'password'=>Hash::make(21312),
                'salary'=>350
            ],
            [
                'name'=>'David',
                'age'=>31,
                'email'=>Str::random(10).'@gmail.com',
                'salary'=>550,
                'password'=>Hash::make(1200)
            ]
        ]);
    }
}
