<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Sistem extends Model
{

	protected $table = 'update_sistem';

    protected $fillable = ['user_id', 'task'];

    public function allSistem(){
        return self::all();         
    }

    public function saveSistem(){
        $input = Input::all();
        $sistem = new Sistem();       
        $sistem->fill($input);                
        $sistem->save();
        return $sistem;
    }

    public function updateSistem($id){
        $input = Input::all();
        $sistem  = self::find($id);       
        $sistem->fill($input);             
        $sistem->save();
        return $sistem;
    }
    
}
