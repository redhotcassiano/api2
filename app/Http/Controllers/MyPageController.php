<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Http\Controllers\CartController;

class MyPageController extends Controller
{
   public function __construct(\App\Models\Tours $tours, Cart $cart, Request $request, SessionController $session)
	{
        $this->tours = $tours;
        $this->cart = $cart;
        $this->request = $request;
        $this->session = $session;

    }

   	public function index()
    {

      if($this->session->getSession('ip_user', $this->request) == false){
          $ip = $this->request->ip(); //$this->request->ip()
      }else{
          $ip = $this->request->session()->get('ip_user');
      }

		$tourInfo[0] = "";

	    	//Cria o Carrinho

	    	if($this->session->getSession('id_user', $this->request) == false){
	    		$id_user = 1;
	    		$tourInfo[0]->id_user = $id_user;

	    	}else{
	    		//Pega os valores das sessions;
	    		$id_user = Auth::user()->id;
	    		$tourInfo[0] = array(
	    				'cart' => '',
	    			);


	    	}
	    	$id_user_ecommerce = $id_user;

	    	$ip_user = $ip;
	    	$newCart = $this->cart->saveNewCart($id_user_ecommerce, $ip_user);

	    	if($newCart != false){
	    		$tourInfo[0]->cart = $newCart;
	    	}else{
	    		$tourInfo[0]['cart'] = $this->cart->getCartAuth($ip_user, $id_user_ecommerce);
	    		$tourInfo[0]['listcart'] = $this->getListCart($tourInfo[0]['cart'][0]['id']);
	    	}


			return view('ecommerce/mypage')->with(
							array('ip' => $ip, 'cart' => $tourInfo[0]['cart'][0]['id'], 'listCart' => $tourInfo[0]['listcart'])
						);

			//return redirect('/');


    }

   public function getListCart($idCart){
   		$listCart = $this->cart->getListCart($idCart);
        $dados = [];
        foreach ($listCart as $data) {
            //$dados[]->values['cart'] = $data;
            $dados[] = $this->cart->getTour($data->tour_id, $data);

        };


         return $dados;

   }

   public function logout(\App\Models\Tours $tours, Cart $cart, Request $request, SessionController $session){
   		Auth::logout();
   		//Cria a Session;
		 $session->deleteSession('id_user', $request);
		 $session->deleteSession('email_user',  $request);
		 $session->deleteSession('name_user', $request);
		 $session->deleteSession('avatar_user', $request);
   		return redirect('/');
   }

}
