<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\DatabaseSeede;
use Database\Seeders\postSeeder;
use Database\Seeders\testComplete;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            DatabaseSeede::class,
            postSeeder::class,
            testComplete::class,
            completion_table_cities::class,
            completion_table_users_i::class,
            user_change_id::class,
            user_change_salary::class,
            user_update_3::class,
            user_update_4::class,
            user_update::class,
            userUpdate2::class
        ]);
    }
}
