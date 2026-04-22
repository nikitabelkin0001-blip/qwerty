<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeede extends Seeder
{
    public function run(): void
    {
        DB::table("user")->insert([
            [
                "name" => "Nikita",
                "age" => 19,
                "email" => "asdasd@gmail.com",
                "salary"=>4000,
                "password" => Hash::make(rand(5, 5)),
            ],
            [
                "name" => "Alexandr",
                "age" => 19,
                "email" => Str::random(10)."@gmail.com",
                "salary"=>1000,
                "password" => Hash::make(rand(5, 5)),
            ],
        ]);
    }
}
