<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class ListCart extends Model
{
    protected $table = 'list-cart';

    protected $fillable = ['cart_id', 'tour_id', 'count_adulto', 'count_crianca', 'count_infantil', 'price_total_tour', 'date_tour', 'hour_tour'];

    public function allListCart(){
        return self::all();         
    }

    public function getListCart($id){
        return self::find($id); 
    }

    public function getCart($id){
        return self::find($id)->cart;
    }
    

    public function saveListCart(){
        $input = Input::all();
        $list = new ListCart();       
        $list->fill($input);              
        //$tour->title_tour = $input['title_tour'];   
         
        $list->save();
        return $list;
    }

    public function updateTour($id){
        $input = Input::all();
        $list  = self::find($id);       
        $list->fill($input); 
        //$tour->title_tour = $input['title_tour']."-test";      
        //$tour->title_tour = $input['title_tour'];        
        $list->save();
        return $list;
    }


    public function cart(){

    	return $this->belongsTo(Cart::class, 'cart_id'); 
    }
}
