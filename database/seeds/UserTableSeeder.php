<?php
  use Illuminate\Database\Seeder;
  use Illuminate\Database\Eloquent\Model;
  use App\Models\User;
  class UserTableSeeder extends Seeder {
    public function run(){
      DB::table('users')->delete();

      $user = User::create(array(
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('admin')
      ));

      $faker = Faker\Factory::create();
      for($ii=0; $ii<0; ++$ii){
        $user = User::create(array(
          'name' => $faker->firstName,
          'email' => $faker->email,
          'password' => Hash::make($faker->word)
        ));
      }
    }
  }
