<?php

namespace App\Http\Controllers\Flow;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlowController extends Controller
{

    protected $apiKey;
    protected $secretKey;
    protected $apiUrl;
	protected $baseUrl;
	
	public function __construct() {
		$this->apiKey = env('FLOW_APIKEY', 'Default apiKey');
        $this->secretKey = env('FLOW_SECRETKEY', 'Default secretKey');
        $this->apiUrl = env('FLOW_APIURL', 'https://www.flow.cl/api');
        $this->baseUrl = env('FLOW_BASEURL', 'Default baseUrl');
    }

    public function firma($parametros){
        $firmaKey = "";
        $keys = array_keys($parametros);
        sort($keys);

        foreach($keys as $key) {
            $firmaKey .= $key . $parametros[$key];
        };

        $firma = hash_hmac('sha256', $firmaKey , $this->secretKey);
        dd($firma);
        return $firma;
    }

    public function generarPago(){
        $optional = array(
            "rut" => "9999999-9",
            "nombre" => "cliente 1"
        );
        $optional = json_encode($optional);

        $parametros = array( 
            "apiKey" => $this->apiKey,
            "commerceOrder" => "Orden del comercio",
            "subject" => "Descripción de la orden",
            "currency" => "CLP",
            "amount"=> 1000,
            "email" => "email del pagador",
            "paymentMethod" => 9,
            "urlConfirmation" => "url callback del comercio donde Flow confirmará el pago",
            "urlReturn" => "url de retorno del comercio donde Flow redirigirá al pagador",
            "optional" => $optional,
            "s" => "la firma de los parámetros efectuada con su secretKey"
          ); 
    }
}

