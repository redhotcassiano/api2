<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SeasonToursController extends Controller
{
    public function __construct(\App\Models\SeasonTours $season, Request $request){
        $this->season = $season;
        $this->request = $request;
    }

    public function index()
    {
        return $this->season->allSeason();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$data = $this->request->all();
        $data =  $this->season->saveSeason();

        if(is_null($data)){
            return response(['response' => 'Não foi possivel Salvar a Temporada!'], 400);
        }

        return $data;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return $this->season->getSeason($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function getSeasonsTour($token){
    	return $this->season->getSeasonsTour($token);
    }
}
