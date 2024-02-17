<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CobaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['id' => 1, 'name' => 'hermanto', 'score' => 70],
            ['id' => 2, 'name' => 'herman', 'score' => 75],
            ['id' => 3, 'name' => 'hermanto', 'score' => 60],
        ];
        DB::table('cobatable')->insert($data);
    }
}
