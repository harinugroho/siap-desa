<?php
use Illuminate\Database\Seeder;
use App\Models\Pemilik;
class PemilikTableSeeder extends Seeder {
    public function run(){
        DB::table('pemilik')->delete();

        $n = 10;

        $faker = Faker\Factory::create();
        for($ii=0; $ii<$n; ++$ii){
            $pemilik= Pemilik::create(array(
                'nama' => $faker->firstName,
                'no_ktp' => $faker->unixTime,
                'tempat_lahir' => $faker->word,
                'tanggal_lahir' => $faker->date(),
                'agama' => $faker->word,
                'alamat' => $faker->address,
                'pekerjaan' => $faker->word

            ));
        }
    }
}
