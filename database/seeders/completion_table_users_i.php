<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class completion_table_users_i extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_users_i')->insert([
            [
                'name' => 'Nikita',
                'CityId' => 1
            ],
            [
                'name'=>'John',
                'CityId'=>2
            ],
            [
                'name'=>'Alex',
                'CityId'=>3
            ]
        ]);
    }
}
