<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NilaikuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nilai')->insert([
            ['alt_id' => 1, 'kri_id' => 1, 'nilai' => 100],
            ['alt_id' => 1, 'kri_id' => 2, 'nilai' => 110],
            ['alt_id' => 1, 'kri_id' => 3, 'nilai' => 75],
            ['alt_id' => 1, 'kri_id' => 4, 'nilai' => 6],
            ['alt_id' => 1, 'kri_id' => 5, 'nilai' => 50],
            ['alt_id' => 2, 'kri_id' => 1, 'nilai' => 109],
            ['alt_id' => 2, 'kri_id' => 2, 'nilai' => 70],
            ['alt_id' => 2, 'kri_id' => 3, 'nilai' => 75],
            ['alt_id' => 2, 'kri_id' => 4, 'nilai' => 6],
            ['alt_id' => 2, 'kri_id' => 5, 'nilai' => 50],
            ['alt_id' => 3, 'kri_id' => 1, 'nilai' => 100],
            ['alt_id' => 3, 'kri_id' => 2, 'nilai' => 80],
            ['alt_id' => 3, 'kri_id' => 3, 'nilai' => 43],
            ['alt_id' => 3, 'kri_id' => 4, 'nilai' => 7],
            ['alt_id' => 3, 'kri_id' => 5, 'nilai' => 45],
            ['alt_id' => 4, 'kri_id' => 1, 'nilai' => 98],
            ['alt_id' => 4, 'kri_id' => 2, 'nilai' => 100],
            ['alt_id' => 4, 'kri_id' => 3, 'nilai' => 69],
            ['alt_id' => 4, 'kri_id' => 4, 'nilai' => 8],
            ['alt_id' => 4, 'kri_id' => 5, 'nilai' => 70],
            ['alt_id' => 5, 'kri_id' => 1, 'nilai' => 90],
            ['alt_id' => 5, 'kri_id' => 2, 'nilai' => 98],
            ['alt_id' => 5, 'kri_id' => 3, 'nilai' => 137],
            ['alt_id' => 5, 'kri_id' => 4, 'nilai' => 7],
            ['alt_id' => 5, 'kri_id' => 5, 'nilai' => 69],
        ]);
    }
}
