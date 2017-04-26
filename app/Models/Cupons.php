<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Cupons extends Model
{
  protected $table = 'sistem-cupons';

  protected $fillable = ['cupon', 'id_user_create', 'status', 'dateBegin', 'dateEnd', 'porcentCupon','ToCard',
                          'ToBoleto'];

  public function allCupons(){
    return self::all();
  }

  public function validateCupon($cupon){
      //$tour = self::orderBy('created_at','DESC')->limit(3)->get();
      $result = self::where('cupon', $cupon)
                          ->where('status', 1)
                          ->limit(1)->get();

      if(is_null($result)){
    		return false;
    	}

      return $result;
  }

  public function getCupon($id){
      return self::find($id);
  }

  public function saveCupon(){
      $input = Input::all();

      $result = new Cupons();
      $result->fill($input);
      //$tour->title_tour = $input['title_tour'];
      $result->save();
      return $result;
  }

  public function updateCupon($id){
      $input = Input::all();
      $result  = self::find($id);
      $result->fill($input);
      //$tour->title_tour = $input['title_tour']."-test";
      //$tour->title_tour = $input['title_tour'];
      $result->save();
      return $result;
  }



}
