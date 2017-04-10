<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function __construct(\App\Models\Cart $cart, Request $request){
        $this->cart = $cart;
        $this->request = $request;        
    }



    public function index()
    {
        return $this->cart->allCarts();
    }

    public function getListCart($id){
        $listCart = $this->cart->getListCart($id);
        $dados = [];
        foreach ($listCart as $data) { 
            //$dados[]->values['cart'] = $data;          
            $dados[] = $this->cart->getTour($data->tour_id, $data);         
            
        };
        

         return $dados;
    }

    public function updateTotal($id, $total){
        
        $result = $this->cart->updateTotal($id, $total);

        return $result;
    }

    public function create()
    {
        //$data = $this->request->all();

        //return $data;

        $cart =  $this->cart->saveCart();

        if(!$cart){
    		return response(['response' => 'Não foi possivel Salvar o Carrinho!'], 400);
    	}
        return response($cart, 200);

       
    }


    public function show($id)
    {
         return $this->cart->getTour($id);
    }


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
