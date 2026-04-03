<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class testComplete extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("TestCompletionTable")->insert([
            "name"=> "Nikita",
            "age"=> 18,
        ]);
    }
}
