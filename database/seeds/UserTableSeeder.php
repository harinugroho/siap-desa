<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class UserTableSeeder extends Seeder {
    public function run(){
        DB::table('users')->delete();

        $user = User::create(array(
            'name' => 'Admin',
            'role' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ));
        $user = User::create(array(
            'name' => 'Kepala Desa',
            'role' => 2,
            'email' => 'kepaladesa@gmail.com',
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
