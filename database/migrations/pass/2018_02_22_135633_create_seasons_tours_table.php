<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonsToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('season_tours', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('token_tour')->uniqid(); 
            $table->integer('id_user_create');         
            $table->date('begin_season');
            $table->date('end_season');
            $table->decimal('price_cost');            
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
        //
    }
}
