_<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idTour');
            $table->date('date_month_max_price_1');
            $table->decimal('max_price_1');
            $table->date('date_month_max_price_2');
            $table->decimal('max_price_2');
            $table->date('date_month_max_price_3');
            $table->decimal('max_price_3');
            $table->date('date_month_max_price_4');
            $table->decimal('max_price_4');
            $table->string('active_week');
            $table->string('active_day');
            $table->date('day_promotion');
            $table->decimal('price_day_promotion');
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
        Schema::drop('calendars');
    }
}
