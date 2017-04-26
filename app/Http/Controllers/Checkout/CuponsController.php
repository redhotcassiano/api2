<?php

namespace App\Http\Controllers\Checkout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CuponsController extends Controller
{
  public function __construct(\App\Models\Cupons $cupons, Request $request){
      $this->cupons = $cupons;
      $this->request = $request;
  }

  public function index()
  {
      return $this->cupons->allCupons();
  }

  public function create()
  {
     return $this->cupons->saveCupon();
  }

  public function show($id)
  {
       return $this->cupons->getCupon($id);
  }

  public function update(Request $request, $id)
  {

  }

  public function destroy($id)
  {

  }

  public function validateCupon($cupon){
    $date = date('Y-d-m');
    $result = $this->cupons->validateCupon($cupon);

    if(!$result){
      return response(['response' => 'Não foi encontrado nenhuma imagem!'], 400);
    }

    $dataIni = $this->diffDate($date, $result[0]['dateBegin'], 'inicio');
    $dataFin = $this->diffDate($date, $result[0]['dateEnd'], 'final');

    if($dataIni == true && $dataFin == true){
      return response($result, 200);
    }else{
      return response(['response' => 'Verifique as datas desse cupon!'], 400);
    }




  }

  function diffDate($d1, $d2, $type='', $sep='-')
  {
    $data_inicial = $d1;
    $data_final = $d2;

    $data_i = explode('-', $data_inicial);
    $data_f = explode('-', $data_final);

    $data_a = $data_i['0'].$data_i['2'].$data_i['1'];
    $data_b = $data_f['0'].$data_f['1'].$data_f['2'];

    switch ($type) {
      case 'inicio':
        if($data_a >= $data_b){
         return true;
       }else{
         return false;
       }
      break;

      case 'final':
        if($data_a <= $data_b){
         return true;
       }else{
         return false;
       }
      break;


    }


  }

}
