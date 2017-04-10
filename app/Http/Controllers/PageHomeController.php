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


class PageHomeController extends Controller
{
    /**
     * Display a listing of the resource.          
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(\App\Models\PageHome $home, \App\Models\Tours $tours, \App\Models\ImagesTours $imagesTours, Cart $cart, Request $request, SessionController $session)
    {
        $this->home = $home;
        $this->tours = $tours;
        $this->cart = $cart;
        $this->imgTours = $imagesTours;
        $this->request = $request;
        $this->session = $session; 
    }

    public function index()
    {
        $gethome = $this->home->allHome();
        if(!$gethome){
             return response(['response' => 'Informações não encontradas!'], 400);
        }        
        return response($gethome, 200);

    }  

    public function createCart($ip){
        if($this->session->getSession('id_user', $this->request) == false){
                $id_user = 1;
                $result['id_user'] = $id_user;                          

        }else{
            $id_user = $this->session->getSession('id_user', $this->request);
            $result['id_user'] = $this->session->getSession('id_user', $this->request);
            $result['name_user'] = $this->request->session()->get('name_user');
            $result['email_user'] = $this->request->session()->get('email_user');
            $result['avatar_user'] = $this->request->session()->get('avatar_user');            
        }

        $id_user_ecommerce = $id_user['session_data'];

        if($id_user_ecommerce == null){
            $id_user_ecommerce = 1;
        }

        $ip_user = $ip;
        $result['ip'] = $ip_user;

        $newCart = $this->cart->saveNewCart($id_user_ecommerce, $ip_user);

        if($newCart != false){
            $result['cart'] = $newCart;            
        }else{
            $result['cart'] = $this->cart->getCartAuth($ip_user, $id_user_ecommerce);
        }

        return $result;        

    } 


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
       return $this->home->saveHome();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gethome = $this->home->getHome($id);

        if(!$gethome){
            return response(['response' => 'Informações não encontradas!'], 400);
        }

        return response($gethome, 200);
        
    }

   
    public function update($id)
    {
        $gethome = $this->home->updateHome($id);

        if(!$gethome){
            return response(['response' => 'Página não encontrada!'], 400);
        }
        return response($gethome, 200);
    }

    
    public function destroy($id)
    {
        $gethome = $this->home->deleteHome($id);

        if(!$gethome){
            return response(['response' => 'Página não encontrada!'], 400);
        }

        return response(['response' => 'Deletado com Sucesso!'], 200);
    }

    public function getToursNews(){
        $toursNew = $this->tours->allToursNews();
        return $toursNew;
    }
}
