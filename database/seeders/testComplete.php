<?php


namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
