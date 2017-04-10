<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SessionController extends Controller
{
    public function getSessionTest(Request $request){
    	
    	if($request->session()->has('session_name')){
    		echo $request->session()->get('session_name');
    	}else{
    		echo 'Sem Session com esse nome';
    	}

    }

    public function putSession(Request $request){
    	
    	$request->session()->put('session_name', 'Cassiano de Souza e Silva Session');

    	echo 'Criado a Session session_name';
    }

    public function forgetSession(Request $request){
    	
    	$request->session()->forget('session_name');

    	echo 'Os dados da session foi removido';
    }

    //Criar a Session;

    public function createSession($name_session, $data, Request $request){
    	
    	$result = $request->session()->put($name_session, $data);

    	if($request->session()->has($name_session)){
    		return $data = $request->session()->get($name_session);
    	}else{
    		return $data = [];
    	}
    	
    }

    public function getSession($name_session, Request $request){
    	$data = [];
    	if($request->session()->has($name_session)){
    		$data['session_data'] = $request->session()->get($name_session);
    		return $data;
    	}else{
    		return $data[] = "";
    	}

    }

    public function deleteSession($name_session, Request $request){
    	
    	$result = $request->session()->put($name_session);

    	if($request->session()->has($name_session)){
    		return $data = $request->session()->get($name_session);
    	}else{
    		return "Sucesso!";
    	}

    }




}
