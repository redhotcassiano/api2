<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.     
     *

     * @return \Illuminate\Http\Response
     */

    public function __construct(\App\Models\Tours $tours, Request $request){
        $this->tours = $tours;
        $this->request = $request;
    }

    public function index()
    {
        return $this->tours->allTours();
    }

    public function getImgs($id){
         return $this->tours->getImgs($id);
    }

     public function getCalendar($id){
         return $this->tours->getCalendar($id);
    }

     public function getComments($id){
         return $this->tours->getComments($id);
    }

    public function getSlug($slug){
        $tour = $this->tours->getSlug($slug);
        if(is_null($tour)){
            return false;
        }
        return $tour;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$data = $this->request->all();

        //return $data;
       return $this->tours->saveTour();
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
         return $this->tours->getTour($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
