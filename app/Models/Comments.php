<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Comments extends Model
{
     protected $table = 'comments';

    protected $fillable = ['idTour', 'name_user', 'comment', 'date', 'img_user', 'stars_share', 'state', 'country'];

    public function allComments(){
    	$comments = self::all();

    	if(is_null($comments)){
    		return false;
    	}
    	return $comments;
    }

    public function saveComment(){

        $input = Input::all();
        $comment = new Comments();       
        $comment->fill($input);         
        $comment->save();

        return $comment;
    
    }

     public function tour(){
    	return $this->belongsTo(Tours::class, 'idTour');
    }
}
