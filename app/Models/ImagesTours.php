<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class ImagesTours extends Model
{
    protected $table = 'imgs-tours';

    protected $fillables = ['token_tour', 'name', 'type_img', 'source_img'];

    public function allImages(){
    	$imgs = self::all();
    	if(is_null($imgs)){
    		return false;
    	}

    	return $imgs;
    }

    public function saveImages( $token_tour, $name, $type_img, $source_img){
    	    	
 		$imgs = new ImagesTours();       
        $imgs->token_tour = $token_tour;
        $imgs->name = $name;
        $imgs->type_img = $type_img;
        $imgs->source_img = $source_img;
        if($imgs->save()){
        	return $imgs;
        }else{
        	return false;
        }
    	
    }

     public static function getToken($token){
         $data = self::where('token_tour', $token)->get();
         if(is_null($data)){
            return false;
        }

        return $data;
    }

    public static function allCapa(){
         $data = self::where('type_img', 'cape')->get();
         if(is_null($data)){
            return false;
        }

        return $data;
    }

     public function tour(){

    	return $this->belongsTo(Tours::class, 'idTour');
    }
}
