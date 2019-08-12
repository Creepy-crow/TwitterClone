<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comments extends Migration
{

    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text');
            $table->BigInteger('user_id')->unsigned();
            $table->BigInteger('tweet_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
            Schema::dropIfExists('twitt_adds');
    }
}
