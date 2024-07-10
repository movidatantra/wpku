<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('criteria')->insert([
            ['nama' => 'Jumlah Balita Terindikasi Stunting', 'bobot' => 5, 'tipe' => 'benefit'],
            ['nama' => 'Jumlah keluarga miskin', 'bobot' => 4, 'tipe' => 'benefit'],
            ['nama' => 'Jumlah balita yang diimunisasi lengkap', 'bobot' => 2, 'tipe' => 'cost'],
            ['nama' => 'Jumlah faskes', 'bobot' => 3, 'tipe' => 'cost'],
            ['nama' => 'Jumlah Anak yang mengalami Malnutrisi', 'bobot' => 3, 'tipe' => 'benefit'],
        ]);
}
}
