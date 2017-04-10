<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillables = ['name'];

    public function tours(){

    	return $this->belongsTo(Tours::class, 'idCategorie'); 
    }
    
}

