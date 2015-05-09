<?php
/**
 * Created by PhpStorm.
 * User: wahyuoi
 * Date: 29/04/15
 * Time: 23:19
 */

use App\Models\Sppf;
use Illuminate\Database\Seeder;
  use App\Models\User;
  class SuratSppfTableSeeder extends Seeder {
      public function run(){
          DB::table('surat_sppf')->delete();

          $n = 75;

          $faker = Faker\Factory::create();
          for($ii=0; $ii<$n; ++$ii){
              $sppf = Sppf::create(array(
                    'nama_1' => $faker->name,
                    'pekerjaan_1' => $faker->word,
                    'umur_1' => $faker->numberBetween(20,50),
                    'alamat_1' => $faker->address,
                    'nama_2' => $faker->name,
                    'pekerjaan_2' => $faker->word,
                    'umur_2' => $faker->numberBetween(20,50),
                    'alamat_2' => $faker->address,
                    'tanah_id' => $ii+1
              ));
          }
      }
  }
