<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page-home', function (Blueprint $table) {
            $table->increments('id');                 
            $table->string('title_home');
            $table->string('subtitle_home');
            $table->text('subtext_newslatter');
            $table->integer('news_tours');            
            $table->integer('wanted_tours');
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
