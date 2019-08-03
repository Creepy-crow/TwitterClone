<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwittAddsTable extends Migration
{
    public function up()
    {
        Schema::create('twitt_adds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text');
            $table->BigInteger('user_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('twitt_adds');
    }
}
