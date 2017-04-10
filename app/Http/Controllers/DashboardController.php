<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\Models\Tours;

class DashboardController extends Controller
{
    public function __construct(){

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

        $chart_tours = Charts::database(Tours::all(), 'bar', 'highcharts')
        				->elementLabel("Total")
					     ->groupByDay();

		$chart_views = Charts::realtime(url('v1/tours'), 1000, 'area', 'highcharts')
			            ->responsive(false)
			            ->height(300)
			            ->width(0)
			            ->title("Permissions Chart")
			            ->maxValues(10);

    	return view('dashboard/dashboard', ['chart' => $chart_views, 'chart_tour' => $chart_tours]);
    }
}
