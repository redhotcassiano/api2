<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Cart extends Model
{
    protected $table = 'cart';

    protected $fillable = ['id_user_ecommerce', 'ip_user', 'total_price'];

    public function allCarts(){
        return self::all();
    }

    public function getCart($id){
        return self::find($id);
    }

    public function saveNewCart($id_user_ecommerce, $ip_user){
        $ip   = self::where('ip_user', $ip_user)->get();
        $user = self::where('id_user_ecommerce', $id_user_ecommerce)->get();

        $data = self::where('ip_user', $ip_user)
                ->where('id_user_ecommerce', $id_user_ecommerce)
                ->get();

        if($data != '[]'){
            return false;
        }else{
            $cart = new Cart();
            $cart['id_user_ecommerce'] = $id_user_ecommerce;
            $cart['ip_user'] = $ip_user;
            $cart['total_price'] = 0;

            if($cart->save()){
                return $cart;
            }else{
                return false;
            }

        }
    }

    public function getCartIp($ip){
        $ip = self::where('ip_user', $ip)->get();
        return $ip;
    }

    public function getCartAuth($ip, $id_user){
        if($id_user == 1){
          $data = self::where('ip_user', $ip)
                        ->get();
        }else{
          $data = self::where('id_user_ecommerce', $id_user)
                  ->get();
        }


        return $data;
    }

    public function getListCart($id){
        $listCart = self::find($id)->listCart;

        return $listCart;
    }


    public function saveCart(){
        $input = Input::all();
        $cart = new Cart();
        $cart->fill($input);
        //$tour->title_tour = $input['title_tour'];

        $cart->save();
        return $cart;
    }

    public function updateCart($id){
        $input = Input::all();
        $cart  = self::find($id);
        $cart->fill($input);
        //$tour->title_tour = $input['title_tour']."-test";
        //$tour->title_tour = $input['title_tour'];
        if($cartcart->save()){
            return $cart;
        }else{
            return false;
        }

    }

    public function updateTotal($id, $total){

        $cart = self::where('id', $id)
                    ->update(['total_price' => $total]);

        if($cart){
            return $cart;
        }else{
            return false;
        }
    }


    public function listCart(){

    	return $this->hasMany(ListCart::class, 'cart_id');
    }

    public function getTour($id, $data){
        $list->cart[] = $data;
        $list->tour[] = Tours::find($id);
        return $list;
    }
}
