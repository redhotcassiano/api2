<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListCartController extends Controller
{
    public function __construct(\App\Models\ListCart $list, Request $request){
        $this->list = $list;
        $this->request = $request;
    }



    public function index()
    {
        return $this->list->allListCart();
    }

    public function getCart($id){
         return $this->list->getCart($id);
    }

    public function create()
    {
        //$data = $this->request->all();

        //return $data;
       return $this->list->saveListCart();
    }


    public function show($id)
    {
         return $this->list->getListCart($id);
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list = $this->list->deletarLista($id);
        return $list;
    }
}
