<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;




class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("post")->insert([
        [
            "title"=>"Title".Str::random(10),
            "slug"=>"asd",
            "likes"=>12,
            "created_at"=>"12.12.12",
            "updated_at"=>"27.02.12",
        ],
        [
            "title"=>Str::random(10),
            "slug"=>"65443",
            "likes"=>44,
            "created_at"=>"11.10.09",
            "updated_at"=>"21.01.12",
        ]
        ]);
    }
}
