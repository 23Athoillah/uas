<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nilai;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nilai::create([
            'nilai_name' => 'Matematika',
            'nilai_kkm' => 75, // Nilai KKM untuk Matematika
        ]);

        Nilai::create([
            'nilai_name' => 'Bahasa Indonesia',
            'nilai_kkm' => 70, // Nilai KKM untuk Bahasa Indonesia
        ]);

        Nilai::create([
            'nilai_name' => 'Bahasa Inggris',
            'nilai_kkm' => 75, // Nilai KKM untuk Bahasa Inggris
        ]);

        Nilai::create([
            'nilai_name' => 'Fisika',
            'nilai_kkm' => 70, // Nilai KKM untuk Fisika
        ]);

        Nilai::create([
            'nilai_name' => 'Kimia',
            'nilai_kkm' => 75, // Nilai KKM untuk Kimia
        ]);

        Nilai::create([
            'nilai_name' => 'Biologi',
            'nilai_kkm' => 70, // Nilai KKM untuk Biologi
        ]);

        Nilai::create([
            'nilai_name' => 'Ekonomi',
            'nilai_kkm' => 70, // Nilai KKM untuk Ekonomi
        ]);

        Nilai::create([
            'nilai_name' => 'Geografi',
            'nilai_kkm' => 70, // Nilai KKM untuk Geografi
        ]);
    }
}
