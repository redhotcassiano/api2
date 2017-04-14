<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id'); 
            $table->unsignedInteger('idCategorie'); 
            $table->string('token_tour')->uniqid(); 
            $table->integer('id_user_create');         
            $table->string('title_tour');
            $table->string('slug_tour');
            $table->string('img_tour');
            $table->integer('status');
            $table->text('details');
            $table->text('about');
            $table->text('questions');
            $table->text('tips');
            $table->decimal('price_cost');
            $table->integer('number_parcela');
            $table->integer('views');
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
         Schema::dropIfExists('tours');
    }
}
