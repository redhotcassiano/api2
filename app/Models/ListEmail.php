<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class ListEmail extends Model
{
    protected $table = 'list-email';

    protected $fillable = ['n_email', 'status'];

    public function allEmails(){
        return self::all();         
    } 

    public function getEmail($id){
        return self::find($id); 
    }


    public function saveEmail(){
        $input = Input::all();        

        $email = new ListEmail();       
        $email->fill($input);              
        //$tour->title_tour = $input['title_tour'];        
        $email->save();
        return $email;
    }

    public function updateStatus($id, $status){
        
        $email = self::where('id', $id)
                    ->update(['status' => $status]); 

        if($email){
            return $email;
        }else{
            return false;
        } 
    }

}
