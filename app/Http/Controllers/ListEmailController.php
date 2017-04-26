<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionController;
use App\User;

class ListEmailController extends Controller
{
    public function __construct(\App\Models\ListEmail $emails, Request $request){
        $this->emails = $emails;
        $this->request = $request;
    }

    public function index()
    {
        return $this->emails->allEmails();
    }

    public function create()
    {
        //$data = $this->request->all();
        //return $data;
       return $this->emails->saveEmail();
    }

    public function show($id)
    {
         return $this->emails->getEmail($id);
    }

    public function updateStatus($id, $status){

    	$result = $this->emails->updateStatus($id, $status);

    	return $result;
    }


}
