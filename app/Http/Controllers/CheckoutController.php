<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionController;
use App\Models\Cart;
use App\User;

class CheckoutController extends Controller
{
    public function __construct(\App\Models\Tours $tours, Cart $cart, Request $request, SessionController $session)
    {
        $this->tours = $tours;
        $this->cart = $cart;
        $this->request = $request;
        $this->session = $session;

    }

    public function index(){
      $user = false;
      $user['init'] = "test";
      $dateNow = date("Y/d/m");


      if($this->session->getSession('id_user', $this->request) == false){
      	$id_user = 1;
      	$user['id_user'] = $id_user;
        $user['name_user'] = "Visitante";

      }else{
        $user['id_user'] = Auth::user()->id;
      	//Pega os valores das sessions;
      	$user['name_user']   = $this->request->session()->get('name_user');
      	$user['email_user']  = $this->request->session()->get('email_user');
      	$user['avatar_user'] = $this->request->session()->get('avatar_user');

      }



    	return view('ecommerce/checkout')->with(array('user_id' => $user['id_user'],
              'user_name' => $user['name_user'], 'date' => $dateNow));
    }

    public function getCart($ip, $user){

      return $this->cart->getCartAuth($ip, $user);

    }

    public function getListTours($id_cart){
      $result = $this->cart->getListCart($id_cart);

      for ($i=0; $i < $result->count() ; $i++) {
          $result[$i]['Tour'] = $this->tours->allToursCart($result[$i]['tour_id']);
      }

      if(is_null($result)){
        return response(['response' => 'Não foi encontrado nenhum passeio'], 400);
      }

      return $result;
    }

    public function getTours($id){
        $tours = $this->tours->allToursCart($id);
        return $tours;
    }


}
