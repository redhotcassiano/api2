<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Mail\NewTour;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->nivel == 99){            
            return redirect('dashboard');
        }

        if(Auth::user()->nivel == 1){
            return redirect('minha-pagina');
        }
    }

    public function email(){
        Mail::to('redhotpublicidade@gmail.com')->send(new NewTour());

        return redirect('/');
    }

    public function emailLogin(){
        Mail::to('redhotpublicidade@gmail.com')->send(new NewTour());

        return redirect('/');
    }
}
