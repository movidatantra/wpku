<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('alternative')->insert([
            ['nama' => 'Brebes'],
            ['nama' => 'Temanggung'],
            ['nama' => 'Magelang'],
            ['nama' => 'Purbalingga'],
            ['nama' => 'Blora'],
        ]);
}
}
