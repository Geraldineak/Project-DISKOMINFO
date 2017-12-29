<?php

use Illuminate\Database\Seeder;
use App\ModelKontak;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create(); //import library faker
        $data = new ModelKontak();
        $limit = 5; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('kontak')->insert([//mengisi data di database
                'nama_lengkap' => $faker->name,
                'password' => bcrypt('secret'),
                'alamat' => $faker->address,
                'no_telp' => $faker->phoneNumber,
                'jabatan' => 'Outsource',
                'departemen' => 'Keuangan',
                'username' => '12345',
                ]);
        }
    }
}
