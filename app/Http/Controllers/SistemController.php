<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemController extends Controller
{
    
    public function __construct(\App\Models\Sistem $sistem, Request $request){
        $this->sistem = $sistem;
        $this->request = $request;
    }

    public function index()
    {
        return $this->sistem->allSistem();
    }

     public function create()
    {
        
       return $this->sistem->saveSistem();
    }

}
