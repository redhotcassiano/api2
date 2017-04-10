<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageTours extends Model
{
    / protected $table = 'page-tours';

    protected $fillable = ['title_home', 'subtitle_home', 'subtext_newslatter', 'news_tours', 'wanted_tours'];

    public function allHome(){
        return self::all(); 
    }

}
