<?php

use Illuminate\Database\Seeder;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker

        $limit = 5; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('laporan')->insert([ //mengisi data di database
                'judul' => $faker-> sentence(3),
                'isi' => $faker-> text,
            ]);
        } 
    }
}
