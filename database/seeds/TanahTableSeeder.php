<?php

use App\Models\Pemilik;
use Illuminate\Database\Seeder;
use \App\Models\Tanah;

class TanahTableSeeder extends Seeder {

    public function run()
    {
        DB::table('tanah')->delete();

        $n = 10;

        $faker = Faker\Factory::create();
        for($ii=0; $ii<$n; ++$ii){
            $id = $faker->randomNumber(1,10);
            $pemilik = Pemilik::find($id);
            $tanah = Tanah::create(array(
                'pemilik_id' => $id,
                'no_sppt_pbb' => $ii,
                'nama' => $pemilik->nama,
                'jalan' => $faker->address,
                'rt' => $faker->numberBetween(1,10),
                'rw' => $faker->numberBetween(1,10),
                'kodepos' => $faker->numberBetween(1000,8000),
                'desa' => $faker->word,
                'kabupaten' => $faker->word,
                'nama_sebelum' => $faker->name,
                'diperoleh_tahun' => $faker->numberBetween(1900, 2015),
                'batas_timur' => $faker->word,
                'batas_selatan' => $faker->word,
                'batas_barat' => $faker->word,
                'batas_utara' => $faker->word,
                'luas' => $faker->numberBetween(1,100)

            ));
        }
    }

}