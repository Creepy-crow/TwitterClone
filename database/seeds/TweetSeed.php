<?php

use Illuminate\Database\Seeder;
use App\TwittAdd;

class TweetSeed extends Seeder
{
    public function run() {
        factory(TwittAdd::class, 5)->create()->make();
    }
}
