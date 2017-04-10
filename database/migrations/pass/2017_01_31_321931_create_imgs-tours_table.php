<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgsToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imgs-tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token_tour')->uniqid();  
            $table->string('name');
            $table->string('type_img');
            $table->string('source_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('imgs-tours');
    }
}
