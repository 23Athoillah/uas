<?php

namespace Database\Seeders;

use App\Models\Biodata;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BiodataSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Pastikan ada beberapa user di database, dan gunakan mereka untuk mengisi biodata
        $users = User::all();

        foreach ($users as $user) {
            Biodata::create([
                'user_id' => $user->id,
                'nama_lengkap' => $faker->name,
                'nik' => $faker->unique()->numerify('##########'),
                'tempat_lahir' => $faker->city,
                'tgl_lahir' => $faker->date(),
                'jenis_kelamin' => $faker->randomElement(['L', 'P']),
                'agama' => $faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha', 'Katholik']),
                'alamat_lengkap' => $faker->address,
                'img_user' => $faker->imageUrl(640, 480, 'people'),
                'jalur_tes' => $faker->randomElement([1, 2]), // 1: Jalur Tes, 2: Jalur Prestasi
                'konfirmasi' => $faker->randomElement([0, 1]), // 0: Belum Terkonfirmasi, 1: Terkonfirmasi
                'status' => $faker->randomElement([0, 1]), // 0: Tidak Aktif, 1: Aktif
            ]);
        }
    }
}
