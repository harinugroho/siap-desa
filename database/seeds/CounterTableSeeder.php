<?php
use App\Models\Counter;
use Illuminate\Database\Seeder;
use App\Models\Pemilik;
class CounterTableSeeder extends Seeder {
    public function run(){
        DB::table('counter')->delete();

        $input = array('nama' => 'kuitansi', 'counter' => 1);
        Counter::create($input);
    }
}
