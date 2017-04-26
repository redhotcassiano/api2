<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable =['name'];

    public function allCategory(){
      $result = self::all();

      if(is_null($result)){
        return false;
      }

      return $result;
    }

    public function getCategory($id){
        return self::find($id);
    }

    public function saveCategory(){
        $input = Input::all();

        $category = new Category();
        $category->fill($input);
        //$tour->title_tour = $input['title_tour'];
        $category->save();
        return $category;
    }

    public function updateCategory($id){
        $input = Input::all();
        $category  = self::find($id);
        $category->fill($input);
        //$tour->title_tour = $input['title_tour']."-test";
        //$tour->title_tour = $input['title_tour'];
        $category->save();
        return $category;
    }

    public function tours(){

    	return $this->belongsTo(Tours::class, 'idCategorie');
    }

}
