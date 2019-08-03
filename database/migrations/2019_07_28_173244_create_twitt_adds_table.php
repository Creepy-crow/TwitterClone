<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwittAddsTable extends Migration
{

//fix conflict
<<<<<<< HEAD
    public function up() {
=======
//    delete annotations
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
>>>>>>> 98d12893a5a7aca4e3c8d1e312efcb06b21be2c5
        Schema::create('twitt_adds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text');
            $table->BigInteger('user_id')->unsigned();
<<<<<<< HEAD
=======
            //delete foreing key
            $table->foreign('user_id')
            ->references('id')
            ->on('users');
>>>>>>> 98d12893a5a7aca4e3c8d1e312efcb06b21be2c5
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('twitt_adds');
    }
}
