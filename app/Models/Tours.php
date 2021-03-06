<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Tours extends Model
{
    protected $table = 'tours';

    protected $fillable = ['title_tour', 'id_user_create', 'token_tour', 'idCategorie', 'slug_tour', 'status','details',
                            'about', 'questions', 'tips', 'price_cost', 'number_parcela', 'kidsOk', 'views'];

    public function allTours(){

        $tour['tours'] = self::all();

        $imgs = ImagesTours::allCapa();
        $tour['imgs'] = $imgs;

        return $tour ;
    }

    public function allToursNews(){
        //$tour = self::orderBy('created_at','DESC')->limit(3)->get();
        $tour['tours'] = self::where('status', 1)
                            ->orderBy('created_at','DESC')->limit(3)->get();

        $imgs = ImagesTours::allCapa();
        $tour['imgs'] = $imgs;

        return $tour ;
    }

    public function allToursCart($id){
        //$tour = self::orderBy('created_at','DESC')->limit(3)->get();
        $tour['tours'] = self::where('status', 1)
                            ->where('id', $id)->get();

        $imgs = ImagesTours::allCapa();
        $tour['imgs'] = $imgs;

        return $tour ;
    }

    public function allToursViews(){
        //$tour = self::orderBy('created_at','DESC')->limit(3)->get();
        $tour['tours'] = self::where('status', 1)
                            ->orderBy('views','DESC')->limit(3)->get();

        $imgs = ImagesTours::allCapa();
        $tour['imgs'] = $imgs;

        return $tour ;
    }

    public function getTour($id){
        return self::find($id);
    }

    public function getImgs($id){
        return self::find($id)->imgs;
    }

     public function getCalendar($id){
        return self::find($id)->calendar;
    }

     public function getComments($id){
        return self::find($id)->comments;
    }

    public function getSlug($slug){

        $data = self::where('slug_tour', $slug)->get();

        if(is_null($data)){

            return false;

        }
        return $data;
    }

    public function getBanners($token){

        $data = ImagesTours::where('token_tour', $token)->get();

        if(is_null($data)){

            return false;

        }
        return $data;
    }

    public function saveTour(){
        $input = Input::all();

        $tour = new Tours();
        $tour->fill($input);
        //$tour->title_tour = $input['title_tour'];
        $tour->views = 1;
        $tour->save();
        return $tour;
    }

    public function updateTour($id){
        $input = Input::all();
        $tour  = self::find($id);
        $tour->fill($input);
        //$tour->title_tour = $input['title_tour']."-test";
        //$tour->title_tour = $input['title_tour'];
        $tour->save();
        return $tour;
    }

    public function category(){

    	return $this->belongsTo(Category::class, 'idCategorie');
    }

    public function imgs(){

    	return $this->hasMany(ImagesTours::class, 'idTour');
    }

    public function comments(){

    	return $this->hasMany(Comments::class, 'idTour');
    }

    public function calendar(){

        return $this->hasMany(Calendars::class, 'idTour');
    }

    public function updateViews($id, $view){

        $tour = self::where('id', $id)
                    ->update(['views' => $view]);

        if($tour){
            return $tour;
        }else{
            return false;
        }
    }

    public function desativarTour($id, $status){

          if($status == 1){
            $newStatus = 0;
          }else{
            $newStatus = 1;
          }

          $tour = self::where('id', $id)
                  ->update(['status' => $newStatus]);

          return $newStatus;
    }
}
