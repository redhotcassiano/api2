<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewsRelatoryController extends Controller
{
  public function __construct(\App\Models\ViewsRelatory $views, Request $request){
      $this->views = $views;
      $this->request = $request;
  }

  public function index()
  {
      return $this->views->allViews();
  }

  public function save(){

    $vi = $this->views->saveView();
    if(is_null($vi)){
      return "erro";
    }
    return $vi;
  }

  public function getView($id){
    $view = $this->views->getView($id);
    if($view != 'false'){
      return $view;
    }else{
      return 'error';
    }
  }
}
