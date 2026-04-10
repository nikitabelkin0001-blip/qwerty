<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\postSeeder;
use Database\Seeders\testComplete;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //     User::factory()->create([
        //         'name' => 'Test User',
        //         'email' => 'test@example.com',
        //     ]);
        $this->call([
            postSeeder::class,
            testComplete::class,
        ]);
        DB::table("users")->insert([
            "name" => "Nikita",
            "age" => 19,
            "email" => "asdasd@gmail.com",
            "password" => Hash::make('12345'),
        ]);
    }
}
