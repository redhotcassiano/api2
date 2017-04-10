<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class PageHome extends Model
{
    protected $table = 'page-home';

    protected $fillable = ['title_home', 'subtitle_home', 'subtext_newslatter', 'news_tours', 'wanted_tours'];

    public function allHome(){
        return self::all(); 
    }

     public function getImgs($id){
        return self::find($id)->imgs;
    }

    public function getHome($id){
        $home = self::find($id);

        if(is_null($home)){
            return false;
        }

        return $home;
    }
    

    public function saveHome(){
        $input = Input::all();
        $page = new PageHome();       
        $page->fill($input); 
        //$tour->title_tour = $input['title_tour']."-test";      
        //$tour->title_tour = $input['title_tour'];        
        $page->save();
        return $page;
    }

    public function updateHome($id){
        
        $page = self::find($id);

        if(is_null($page)){
            return false;
        }       

        $input = Input::all();
        $page->fill($input); 
        //$tour->title_tour = $input['title_tour']."-test";      
        //$tour->title_tour = $input['title_tour'];        
        $page->save();
        return $page;
    }

    public function deleteHome($id){
        $home = self::find($id);

        if(is_null($home)){
            return false;
        }

        return $home->delete();
    }


    public function imgs(){

        return $this->hasMany(ImagesPages::class, 'idPages'); 
    }
    
}
//cassianoipclin ipclin@2908