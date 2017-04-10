<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    public function __construct(\App\Models\Comments $comments, Request $request){
        $this->comments = $comments;
        $this->request = $request;
    }

    public function index()
    {
        return $this->comments->allComments();
    }

    public function save(){
    	$comment = $this->comments->saveComment();
    	if(is_null($comment)){
    		return "erro";
    	}
    	return $comment;
    }
}
