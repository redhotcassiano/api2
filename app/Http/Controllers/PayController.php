<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{
    public function index(){

      //URL do iPag
        $url = 'http://sandbox.ipag.com.br/pagamento';

        //os dados abaixo são apenas de exemplo
        //preencha com os dados necessários para relizar os testes
        $fields = array(
            'identificacao' => urlencode('zugno'),
            'pedido' => urlencode('1212121212'),
            'operacao' => urlencode('Pagamento'),//manter
            'url_retorno' => urlencode('http://natalpraias.app/retorno'),
            'retorno_tipo' => urlencode('json'),
            'valor' => urlencode('1.00'),
            'nome' => urlencode('Jose da Silva'),
            'doc' => urlencode('12312312300'),
            'email' => urlencode('jose@teste.com.br'),
            'fone' => urlencode('11111111111'),
            'endereco' => urlencode('Rua 1'),
            'numero_endereco' => urlencode('1111'),
            'complemento' => urlencode('Complemento'),
            'bairro' => urlencode('Bairro 1'),
            'cidade' => urlencode('São paulo'),
            'estado' => urlencode('SP'),
            'pais' => urlencode('Brasil'),
            'cep'=> urlencode('07500000'),
            'metodo'=> urlencode('mastercard'),
            'parcelas'=> urlencode('1'),
            'nome_cartao'=> urlencode('jose da silva'),
            'num_cartao'=> urlencode('3333333333333333'),
            'cvv_cartao'=> urlencode('444'),
            'mes_cartao'=> urlencode('07'),
            'ano_cartao'=> urlencode('20'),
        );
        //url-ify the data for the POST
        $fields_string ='';
        foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
        rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_POST, true );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $fields_string );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)' );
        curl_setopt( $ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1 );

        $result = curl_exec( $ch );

        echo $result;

        curl_close( $ch );

    }

    public function consulta(){

      //URL do iPag
      $url = 'http://sandbox.ipag.com.br/consulta';

      $fields = array(
            'identificacao' => urlencode('zugno'),
            'transId' => urlencode('994430'),
            'numPedido' => urlencode('1212121212'),
            // 'url_retorno' => urlencode('http://minhaurl.com'),
            'retorno_tipo' => urlencode('json')
      );
      $fields_string ='';
      foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
      rtrim($fields_string, '&');

      $ch = curl_init();
      curl_setopt( $ch, CURLOPT_URL, $url );
      curl_setopt( $ch, CURLOPT_POST, true );
      curl_setopt( $ch, CURLOPT_POSTFIELDS, $fields_string );
      curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
      curl_setopt($ch, CURLOPT_HEADER, true);
      curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
      curl_setopt( $ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)' );
      curl_setopt( $ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1 );

      $result = curl_exec( $ch );

      echo $result;

      curl_close( $ch );

    }
}
