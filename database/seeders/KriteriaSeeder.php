<?php

namespace Database\Seeders;
use App\Models\Kriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kriteria::create([
            'nama_kriteria' => 'Jumlah Balita Terindikasi Stunting',
            'label' => 'benefit',
            'bobot' => 5,
            'flag' => 'c1',
        ]);
    }
}
