<?php

use Illuminate\Database\Seeder;
use App\TwittAdd;

class TweetSeed extends Seeder
{
<<<<<<< HEAD
    public function run() {
        factory(TwittAdd::class, 5)->create()->make();
=======
//    delete annotations
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Twitt_add::class, 5)->create()->make();
>>>>>>> 98d12893a5a7aca4e3c8d1e312efcb06b21be2c5
    }
}
