<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostNilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'nilai_id' => 1,
                'score_s1' => 85.5,
                'score_s2' => 90.0,
                'score_s3' => 88.0,
                'score_s4' => 92.0,
                'score_s5' => 89.5,
            ],
            [
                'user_id' => 2,
                'nilai_id' => 2,
                'score_s1' => 75.0,
                'score_s2' => 80.0,
                'score_s3' => 78.0,
                'score_s4' => 85.0,
                'score_s5' => 82.0,
            ],
        ];
    }
}
