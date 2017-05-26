<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\Models\Tours;
use App\Models\ViewsRelatory;

class DashboardController extends Controller
{
    public function __construct(\App\Models\Tours $tours, \App\Models\ImagesTours $images){
      $this->tours = $tours;
      $this->images = $images;
    }

    public function index(){

    	$chart = Charts::multi('bar', 'material')
          // Setup the chart settings
          ->title("My Cool Chart")
          // A dimension of 0 means it will take 100% of the space
          ->dimensions(0, 400) // Width x Height
          // This defines a preset of colors already done:)
          ->template("material")
          // You could always set them manually
          // ->colors(['#2196F3', '#F44336', '#FFC107'])
          // Setup the diferent datasets (this is a multi chart)
          ->dataset('Element 1', [5,20,100])
          ->dataset('Element 2', [15,30,80])
          ->dataset('Element 3', [25,10,40])
          // Setup what the values mean
          ->labels(['One', 'Two', 'Three']);

        $chart_tours = Charts::database(ViewsRelatory::all(), 'bar', 'highcharts')
        				->elementLabel("Total")
					     ->groupByDay();

    		$chart_views = Charts::realtime(url('/web/views'), 1000, 'area', 'highcharts')
    			            ->responsive(true)
    			            ->height(300)
    			            ->width(0)
    			            ->title("VISUALIZAÇÕES")
    			            ->maxValues(5000);

    	return view('dashboard/dashboard', ['chart' => $chart_views, 'chart_tour' => $chart_tours]);
    }

    public function editTour($id){
        $tours['tour'] = $this->tours->getTour($id);

        if($tours != null){
            $tours['banners'] = $this->tours->getBanners($tours['tour']['token_tour']);
            $tours['img'] = $this->images->getCapa($tours['tour']['token_tour']);
        }
        //$tours['img'] = $this->tours->getImgs($tours['token_tour']);

        return $tours;

    }
}
