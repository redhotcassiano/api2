<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('list-cart', function (Blueprint $table) {
            $table->increments('id'); 
            $table->unsignedInteger('cart_id'); 
            $table->integer('tour_id');
            $table->integer('count_adulto');
            $table->integer('count_crianca');
            $table->integer('count_infantil');
            $table->decimal('price_total_tour');
            $table->date('date_tour');
            $table->string('hour_tour');
            $table->timestamps();
            $table->foreign('cart_id')->references('id')->on('cart');



        });

       Schema::table('list-cart', function($table){
            
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
