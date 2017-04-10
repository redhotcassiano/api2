<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class ImagesPages extends Model
{
    protected $table = 'imgs-pages';

    protected $fillables = ['idPages', 'name', 'type_img', 'source_img'];

    public function allImages(){
    	$imgs = self::all();
    	if(is_null($imgs)){
    		return false;
    	}

    	return $imgs;
    }

    public function saveImages($idPages, $name, $type_img, $source_img){
    	    	
 		$imgs = new ImagesPages();       
        $imgs->idPages = $idPages;
        $imgs->name = $name;
        $imgs->type_img = $type_img;
        $imgs->source_img = $source_img;
        if($imgs->save()){
        	return $imgs;
        }else{
        	return false;
        }
    	
    }

     public function home(){

    	return $this->belongsTo(PageHome::class, 'idPages');
    }
}
