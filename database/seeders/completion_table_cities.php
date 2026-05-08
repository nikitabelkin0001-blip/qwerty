<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class completion_table_cities extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_cities')->insert([
            [
                'city'=>'Omsk'
            ],
            [
                'city'=>'Tomsk'
            ],
            [
                'city'=>'Moskow'
            ]
        ]); 
    }
}
