<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableCupons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sistem-cupons', function (Blueprint $table) {
          $table->increments('id');
          $table->string('cupon')->uniqid();
          $table->integer('id_user_create');
          $table->integer('status')->null();
          $table->date('dateBegin');
          $table->date('dateEnd');
          $table->decimal('porcentCupon');
          $table->integer('ToCard');
          $table->integer('ToBoleto');
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
