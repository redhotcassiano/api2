<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Socialite;
use App\Models\Social;
use App\Http\Controllers\SessionController;

class SocialController extends Controller
{
    public function __contruct(SessionController $session, Request $request){
    	$this->middleware('guest');
    	$this->request = $request;
        $this->session = $session;
    }

    public function getSocialAuth($provider=null){
    	if(!config("services.$provider")) abort('404');

        return Socialite::driver($provider)->redirect();
    }

    public function getSocialAuthCallback($provider=null, SessionController $session, Request $request){
    	if($user = Socialite::driver($provider)->user()){

    		if($user->email == null){
    			$email= strtolower(str_replace(' ', '', $user->name));
				$user->email = $email.'@natalpraias.com';
			}

            if ($the_user = User::select()->where('email', '=', $user->email)->first())
			 {
				 Auth::login($the_user);

				 //Cria a Session;
				 $session->createSession('id_user', Auth::user()->id, $request);
				 $session->createSession('email_user', $user->email, $request);
				 $session->createSession('name_user', $user->name, $request);
				 $session->createSession('avatar_user', $user->avatar, $request);
				 
			 }else{			 	

				 $new_user = new User;
				 $new_user->name 		= $user->name;
				 $new_user->email 		= $user->email;
				 $new_user->avatar 		= $user->avatar;
				 $new_user->nivel 		= 1;
				 $new_user->status 		= 1;
				 $new_user->social 		= 1;

				 $new_user->save();
				 Auth::login($new_user);

				 //Cria a Session;
				 $session->createSession('id_user', Auth::user()->id, $request);
				 $session->createSession('email_user', $user->email, $request);
				 $session->createSession('name_user', $user->name, $request);
				 $session->createSession('avatar_user', $user->avatar, $request);
				 
				 //Registrar Informação extra
				 $social = new Social;
				 $social->user_id = $new_user->id;
				 $social->provider = $provider;
				 $social->uid_provider = $user->id;
				 $social->save();
			 }
			 return redirect('/');

          }else{
    		return "Ops! Algo deu errado aqui.";
    	}
    }
}
