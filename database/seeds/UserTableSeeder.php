<?php
  use Illuminate\Database\Seeder;
  use Illuminate\Database\Eloquent\Model;
  use App\User;
  class UserTableSeeder extends Seeder {
    public function run(){
      DB::table('users')->delete();

      $user = User::create(array(
        'name' => 'Gede',
        'email' => 'gedewahyu.ap@gmail.com',
        'password' => Hash::make('qwerty')
      ));

      $faker = Faker\Factory::create();
      for($ii=0; $ii<100; ++$ii){
        $user = User::create(array(
          'name' => $faker->firstName,
          'email' => $faker->email,
          'password' => Hash::make($faker->word)
        ));
      }
    }
  }
