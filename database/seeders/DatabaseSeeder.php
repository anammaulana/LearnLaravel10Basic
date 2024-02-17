<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $faker= Faker::create('id_ID');
        for ($i = 1; $i <= 5; $i++){
            DB::table('cobatable')->insert([
                'name' => $faker->name,
                'score' => $faker->numberBetween(0,100)
            ]);        }
    }
}
