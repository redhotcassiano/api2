<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagespagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imgs-pages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idPages');
            $table->string('name');
            $table->string('type_img');
            $table->string('source_img');
            $table->timestamps();
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
