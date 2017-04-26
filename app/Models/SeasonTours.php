<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;


class SeasonTours extends Model
{
	 protected $table = 'season_tours';

     protected $fillable = ['token_tour', 'id_user_create', 'begin_season', 'end_season', 'price_cost'];

    public function allSeason(){
        return self::all();
    }

    public function getSeason($id){
        return self::find($id);
    }

    public function getSeasonsTour($token){

    	$data = self::where('token_tour', $token)->get();

    	return $data;
    }		

     public function saveSeason(){
        $input = Input::all();
        $season = new SeasonTours();
        $season->fill($input);
        //$tour->title_tour = $input['title_tour'];

        $season->save();
        return $season;
    }
}
