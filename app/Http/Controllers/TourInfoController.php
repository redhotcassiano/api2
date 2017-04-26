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

class TourInfoController extends Controller
{

	public function __construct(\App\Models\Tours $tours, Cart $cart, Request $request, SessionController $session)
	{
        $this->tours = $tours;
        $this->cart = $cart;
        $this->request = $request;
        $this->session = $session;

    }



    public function index($slug)
    {
    	date_default_timezone_set('UTC');

			if($this->session->getSession('ip_user', $this->request) == false){
					$ip = $this->request->ip(); //$this->request->ip()
			}else{
					$ip = $this->request->session()->get('ip_user');
			}

		$slug = $slug;
		$tourInfo = false;
		$tourInfo = $this->tours->getSlug($slug);


		if($tourInfo == '[]'){

	    	 return redirect('error/404');

	    }else{
	    	//Cria o Carrinho

	    	if($this->session->getSession('id_user', $this->request) == false){
	    		$id_user = 1;
	    		$tourInfo[0]->id_user = $id_user;

	    	}else{
	    		//Pega os valores das sessions;
	    		$id_user = $this->session->getSession('id_user', $this->request);
	    		$tourInfo[0]->name_user = $this->request->session()->get('name_user');
	    		$tourInfo[0]->email_user = $this->request->session()->get('email_user');
	    		$tourInfo[0]->avatar_user = $this->request->session()->get('avatar_user');

	    	}
	    	$id_user_ecommerce = $id_user['session_data'];
	    	if($id_user_ecommerce == null){
	    		$id_user_ecommerce = 1;
	    	}

	    	$ip_user = $ip;
	    	$newCart = $this->cart->saveNewCart($id_user_ecommerce, $ip_user);

	    	if($newCart != false){
	    		$tourInfo[0]->cart = $newCart;
	    	}else{
	    		$tourInfo[0]->cart = $this->cart->getCartAuth($ip_user, $id_user_ecommerce);
	    	}

	    	//Pega os banners desse passeio;
	    	$tourInfo[0]->banner = $this->getBanners($tourInfo[0]->token_tour);

	    	//Pega os comentarios do Passeio;
	    	$tourInfo[0]->comments = $this->tours->getComments($tourInfo[0]->id);

	    	//pega a data atual;
	    	$tourInfo[0]->dateNow = date("Y-m-d");

			return view('ecommerce/tour')->with(
							array('ip' => $ip, 'tourInfo' => $tourInfo[0])
						);

			//return redirect('/');
	    }
	    //return response($tourInfo, 200);

    }


    public function getBanners($token)
    {
    	$banner = $this->tours->getBanners($token);

    	if($banner == '[]'){
    		return false;
    	}else{
    		return $banner;
    	}
    }

    public function updateViews($id, $views){
    	$tour = $this->tours->updateViews($id, $view);
    	if($tour != null):
    		return $tour;
    	else:
    		return false;
    	endif;

    }

}
