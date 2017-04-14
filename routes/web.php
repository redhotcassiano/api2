<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
	 return view('demo');
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return redirect('/');
});

Route::get('loja', function () {
	 return view('ecommerce/home');
});

Route::get('/email', 'HomeController@email')->name('sendEmail');

Route::get('test', function(){	
    $dias = array('dia1'=> '1,', 'dia2'=>'2,');
	return view('test')->with('dias', $dias);
});

//Rotas da Session;
Route::get('session/get', 'SessionController@getSessionTest');
Route::get('session/put', 'SessionController@putSession');
Route::get('session/forget', 'SessionController@forgetSession');
Route::get('session/get/{name_session}', 'SessionController@getSession');
Route::get('session/save/{name_session}/{data}', 'SessionController@createSession');
Route::get('session/delete/{name_session}', 'SessionController@deleteSession');


Route::group(['middleware' => ['auth']], function () {
	Route::get('dashboard', 'DashboardController@index');	
	
	Route::get('minha-pagina', 'MyPageController@index');
	Route::get('minha-pagina/logout', 'MyPageController@logout');

});



Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function(){
	
	Route::get('home-control', function(){    	
		return view ('dashboard/page_home_control');
	});

	Route::get('tours-control', function(){    	
		return view ('dashboard/page_tours_control');
	});

	//tours
	Route::get('tours', function(){    	
		return view ('dashboard/page_table_tours_control');
	});

	Route::get('addtours', function(){
		$scriptpage = url('assets/js/pages/dashboard.js');
		$codRand = rand(10, 99999999999); 

		$verif = DB::table('tours')->where('token_tour', $codRand)->value('title_tour'); 

		if($verif != null){
			$codRand = rand(10, 99999999999);
		}

		return View::make('dashboard/page_addTours')->with(array('scriptpage' => $codRand, 'verif' => $verif));
	});




});


Route::group(['prefix' => 'v1'], function(){
	//Tours
	Route::get('tours', 'ToursController@index');
	Route::get('tours/{id}', 'ToursController@show');
	Route::get('tours/imgs/{token}', 'ImagesToursController@getToken');
	Route::get('tours/comments/{id}', 'ToursController@getComments');
	Route::get('tours/calendar/{id}', 'ToursController@getCalendar');
	Route::get('tour/{slug}', 'ToursController@getSlug');
	Route::post('tours', 'ToursController@create');
	Route::put('tours/{id}', 'ToursController@update');
	Route::delete('tours/{id}', 'ToursController@destroy');


	//Home-Page
	Route::get('home-page', 'PageHomeController@index');
	Route::get('home-page/{id}', 'PageHomeController@show');
	Route::get('getnewstours', 'PageHomeController@getToursNews');
	Route::get('getSearch', 'PageHomeController@getSearch');
	Route::post('home-page', 'PageHomeController@create');
	Route::get('home-page/cart/{ip}', 'PageHomeController@createCart');
	Route::put('home-page/{id}', 'PageHomeController@update');
	Route::delete('home-page/{id}', 'PageHomeController@destroy');

	//Images Tours
	Route::get('images', 'ImagesToursController@index');
	Route::get('images/{id}', 'ImagesToursController@show');	
	Route::post('images', 'ImagesToursController@create');
	Route::put('images/{id}', 'ImagesToursController@update');
	Route::delete('images/{id}', 'ImagesToursController@destroy');

	////Images
	Route::get('imagespages', 'ImagesPagesController@index');
	Route::get('imagespages/{id}', 'ImagesPagesController@show');	
	Route::post('imagespages', 'ImagesPagesController@create');
	Route::put('imagespages/{id}', 'ImagesPagesController@update');
	Route::delete('imagespages/{id}', 'ImagesPagesController@destroy');

	////Temporadas
	Route::get('seasons', 'SeasonToursController@index');
	Route::get('seasons/{id}', 'SeasonToursController@show');
	Route::get('seasons/tour/{token}', 'SeasonToursController@getSeasonsTour');	
	Route::post('seasons', 'SeasonToursController@create');
	Route::put('seasons/{id}', 'SeasonToursController@update');
	Route::delete('seasons/{id}', 'SeasonToursController@destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

///// ecommerce ////////	
Route::get('tour/{slug}', 'TourInfoController@index');
Route::get('tour/{slug}/{associado}', 'TourInfoController@index');
	



Route::group(['prefix' => 'web'], function(){
	//Cart E-commerce
	Route::get('cart', 'CartController@index');
	Route::get('cart/{id}', 'CartController@show');
	Route::get('cart/list/{id}', 'CartController@getListCart');	
	Route::post('cart', 'CartController@create');
	Route::put('cart/{id}', 'CartController@update');
	Route::put('cart/{id}/{total}', 'CartController@updateTotal');
	Route::delete('cart/{id}', 'CartController@destroy');

	//List Cart E-commerce
	Route::get('listcart', 'ListCartController@index');
	Route::get('listcart/{id}', 'ListCartController@show');		
	Route::post('listcart', 'ListCartController@create');
	Route::put('listcart/{id}', 'ListCartController@update');
	Route::delete('listcart/{id}', 'ListCartController@destroy');

	//Comentario;

	Route::get('comments', 'CommentsController@index');
	Route::get('comments/{tour}', 'CommentsController@index');
	Route::post('comments', 'CommentsController@save');
	Route::get('comments', 'CommentsController@index');
	Route::get('comments', 'CommentsController@index');

	//Social
	Route::get('social/{provider?}', 'SocialController@getSocialAuth');
	Route::get('social/callback/{provider?}', 'SocialController@getSocialAuthCallback');

	//Sistema;
	Route::get('sistem', 'SistemController@index');
	Route::post('sistem', 'SistemController@create');

});

