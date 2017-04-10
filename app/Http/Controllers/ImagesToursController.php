<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ImagesToursController extends Controller
{
    public function __construct(\App\Models\ImagesTours $images, Request $request){
        $this->images = $images;
        $this->request = $request;
    }

    public function index()
    {
    	$imgs = $this->images->allImages();

    	if(!$imgs){
    		return response(['response' => 'Não foi encontrado nenhuma imagem!'], 400);
    	}
        return response($imgs, 200);
    }

    public function show($id){
         return $this->images->getImgs($id);
    }

    public function getToken($token){
         return $this->images->getToken($token);
    }

    public function create(){
    	$file = $this->request->all();
    	$file_id = $file['formId'];
        $filetype = $file['fileType'];
    	 	

    	$file_img = $this->request->file('file_data');

    	$storagePath =  public_path().'/img';
    	$fileName = rand(100, 9999999999).'-'.$file_img->getClientOriginalName();

    	$token_tour = $file_id;
    	$name = $fileName;
    	$source_img = public_path().'/img/'.$name;
    	$type_img = $filetype;

    	if($file_img->move($storagePath, $fileName)){

    		$imgs =  $this->images->saveImages($token_tour, $name, $type_img, $source_img);
    		if(!$imgs){
	    		return response(['response' => 'Não foi possivel enviar a imagem!'], 400);
	    	}
	        return response($imgs, 200);
    	}
    	
    	//return dd($filetype); //response(['response' => 'Opá Estamos indo bem! '.$this->request->all()], 200);

    	
    }

    public function update($id){

    }

    public function destroy($id){
    	
    }
}
