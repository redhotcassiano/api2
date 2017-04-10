<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Calendars extends Model
{
     protected $table = 'calendars';

    protected $fillables = ['idTour', 'date_month_max_price_1', 'max_price_1', 'date_month_max_price_2', 'max_price_2', 'date_month_max_price_3', 'max_price_3 ', 'date_month_max_price_4 ', 'max_price_4', 'active_week', 'active_day ', 'day_promotion ', 'price_day_promotion'];

    public function tour(){
    	return $this->belongsTo(Tours::class, 'diTour');
    }
}
