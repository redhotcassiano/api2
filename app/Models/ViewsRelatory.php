<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;


class ViewsRelatory extends Model
{
  protected $table = 'views_relatory';

  protected $fillable = ['title_page', 'url'];

  public function allViews(){

      $view = self::all();


      return $view;

  }

  public function getView($id){
    $view = self::find($id);
    if(is_null($view)){
      return $view;
    }else{
      return 'false';
    }
  }

  public function saveView(){
    $input = Input::all();
    $view = new ViewsRelatory();       
    $view->fill($input);         
    $view->save();

    return $view;
  }

}
