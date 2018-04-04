<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pronos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prono', function (Blueprint $table) {
           
            $table->integer('user_id')->unsigned();
            $table->integer('match_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('match_id')->references('id')->on('match');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
