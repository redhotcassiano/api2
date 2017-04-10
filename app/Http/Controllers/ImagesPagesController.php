<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ImagesPagesController extends Controller
{
 	public function __construct(\App\Models\ImagesPages $image_pages, Request $request){
        $this->image_pages = $image_pages;
        $this->request = $request;
    }

    public function index()
    {
    	$imgs = $this->image_pages->allImages();

    	if(!$imgs){
    		return response(['response' => 'Não foi encontrado nenhuma imagem!'], 400);
    	}
        return response($imgs, 200);
    }

    public function show($id){
         return $this->image_pages->getImgs($id);
    }

    public function create(){
    	$file = $this->request->all();
    	$file_id = $file['formId'];
    	//dd($file_id); 	

    	$file_img = $this->request->file('file_data');

    	$storagePath =  public_path().'/img';
    	$fileName = rand(100, 999999).'-'.$file_img->getClientOriginalName();

    	$idPages = $file_id;
    	$name = $fileName;
    	$source_img = public_path().'/img/'.$name;
    	$type_img = "banner";

    	if($file_img->move($storagePath, $fileName)){

    		$imgs =  $this->image_pages->saveImages($idPages, $name, $type_img, $source_img);
    		if(!$imgs){
	    		return response(['response' => 'Não foi possivel enviar a imagem!'], 400);
	    	}
	        return response($imgs, 200);
    	}
    	
    	return dd(); //response(['response' => 'Opá Estamos indo bem! '.$this->request->all()], 200);

    	
    }

    public function update($id){

    }

    public function destroy($id){
    	
    }   
}
