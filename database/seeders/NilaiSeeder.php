<?php

namespace Database\Seeders;
use App\Models\Nilai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nilais = [
            // ['alt_id' => 1, 'c1' => 100, 'c2' => 110, 'c3' => 50, 'c4' => 6, 'c5' => 75],
            // ['alt_id' => 2, 'c1' => 109, 'c2' => 70, 'c3' => 50, 'c4' => 6, 'c5' => 75],
            // ['alt_id' => 3, 'c1' => 100, 'c2' => 80, 'c3' => 45, 'c4' => 7, 'c5' => 43],
            ['alt_id' => 4, 'c1' => 98, 'c2' => 100, 'c3' => 70, 'c4' => 8, 'c5' => 69],
            ['alt_id' => 5, 'c1' => 90, 'c2' => 98, 'c3' => 69, 'c4' => 7, 'c5' => 137],
            
        ];

            foreach ($nilais as $nilai) {
                Nilai::create($nilai); 
    }
    
    }
}

