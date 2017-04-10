<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tours', function($table){
            $table->foreign('idCategorie')->references('id')->on('categories');
        });

        Schema::table('comments', function($table){
            $table->foreign('idTour')->references('id')->on('tours');
        });

        Schema::table('calendars', function($table){
            $table->foreign('idTour')->references('id')->on('tours');
        });

        //Schema::table('imgs-tours', function($table){
         //   $table->foreign('idTour')->references('id')->on('tours');
       // });

        Schema::table('imgs-pages', function($table){
            $table->foreign('idPages')->references('id')->on('page-home');
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
