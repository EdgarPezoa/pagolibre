<?php

namespace App\Http\Controllers\Flow;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Flow\Utils;
use App\Models\InvoiceModel;
use App\Models\TransaccionModel;
use Exception;

class FlowController extends Controller
{

    protected $apiKey;
    protected $secretKey;
    protected $apiUrl;
    protected $baseUrl;
	
	public function __construct() {
		$this->apiKey = env('FLOW_APIKEY', null);
        $this->secretKey = env('FLOW_SECRETKEY', null);
        $this->apiUrl = env('FLOW_APIURL', 'https://sandbox.flow.cl/api');
        $this->baseUrl = env('FLOW_BASEURL', 'https://pagolibre.devmockup.cl/apiFlow');
        if($this->apiKey == null || $this->secretKey == null){
            return redirect()->route('home_index');
        }
        
    }

    public function sendRequest($service, $params, $method){
        $response = null;
        $firma = null;
        $url = null;

        $url = $this->apiUrl."/".$service;
        $params['apiKey'] = $this->apiKey;
        $firma = $this->firma($params);
        $params['s'] = $firma;

        if($method == "POST"){
            $response = $this->httpSendPostRequest($url, $params);
        }else if($method == "GET"){
            $response = $this->httpSendGetRequest($url, $params);
        }
        
        if(!in_array($response["info"]['http_code'], array('200', '400', '401'))) {
            throw new Exception('Unexpected error occurred. HTTP_CODE: '.$info['http_code'] , $info['http_code']);
        }

        $data = json_decode($response["response"], true);
        return $data;

    }

    public function firma($params){
        $firmaKey = "";
        $keys = array_keys($params);
        sort($keys);

        foreach($keys as $key) {
            $firmaKey .= $key . $params[$key];
        };

        $firma = hash_hmac('sha256', $firmaKey , $this->secretKey);
        return $firma;
    }

    public function httpSendPostRequest($url, $params){
        try {
            $cURL = curl_init();
            curl_setopt($cURL, CURLOPT_URL, $url);
            curl_setopt($cURL, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($cURL, CURLOPT_POST, TRUE);
            curl_setopt($cURL, CURLOPT_POSTFIELDS, $params);
            $response = curl_exec($cURL);
            if($response === false) {
                $error = curl_error($cURL);
                throw new Exception($error, 1);
            } 
            $info = curl_getinfo($cURL);
        }catch (Exception $e) {
            echo 'Error: ' . $e->getCode() . ' - ' . $e->getMessage();
        }

        return array("response" => $response, "info" => $info);
    }

    // CONSULTAR DATOS se´gun un servicio
    public function httpSendGetRequest($url, $params){
        $info = null;
        $url = $url . "?" . http_build_query($params);
        try {
            $cURL = curl_init();
            curl_setopt($cURL, CURLOPT_URL, $url);
            curl_setopt($cURL, CURLOPT_RETURNTRANSFER, TRUE);
            $response = curl_exec($cURL);
            if($response === false) {
                $error = curl_error($cURL);
                throw new Exception($error, 1);
            }
            $info = curl_getinfo($cURL);

        } catch (Exception $e) {
            echo 'Error: ' . $e->getCode() . ' - ' . $e->getMessage();
        }
        return array("response" => $response, "info" => $info);
    }

    public function generarPago($params){
        $optional = array(
            "rut" => "9999999-9",
            "nombre" => "cliente 1"
        );
        $optional = json_encode($optional);

        $params = array( 
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
          ); 
          $service = Utils::PAYMENT_CREATE;

    }

    public function result(Request $request){
        try {
            if(!isset($request->token)) {
                throw new Exception("No se recibio el token", 1);
            }
            $token = filter_input(INPUT_POST, 'token');
            $params = array(
                "token" => $token
            );

            $service = Utils::PAYMENT_CREATE_GET_STATUS;
            $response = $this->sendRequest($service, $params, 'GET');
            
            //Actualiza los datos en su sistema
        
            
        } catch (Exception $e) {
            echo "Error: " . $e->getCode() . " - " . $e->getMessage();
        }
        return dd($response);
    }

    public function confirm(Request $request){
        try {
            if(!isset($request->token)) {
                throw new Exception("No se recibio el token", 1);
            }
            $token = filter_input(INPUT_POST, 'token');
            $params = array(
                "token" => $token
            );

            $service = Utils::PAYMENT_CREATE_GET_STATUS;
            $response = $this->sendRequest($service, $params, 'GET');
            
            //Actualiza los datos en su sistema
            TransaccionModel::create([
                'cod_usuario' => '',
                'cod_estado' => '',
                'flowOrder' => '',
                'subject' => '',
                'amount' => '',
                'paymentMedia' => '',
                'payerEmail' => '',
                'paymenteFee' => '',
                'paymenteTaxes' => '',
                'paymenteBalance' => '',
                'requestDate' => '',
                'paymentDate' => '',
                'paymenteTransferDate' => '',
            ]);
        } catch (Exception $e) {
            echo "Error: " . $e->getCode() . " - " . $e->getMessage();
        }
    }

    public function prueba($params){
        $params['apiKey'] = $this->apiKey;
        $params['urlConfirmation'] = $this->baseUrl.'/confirm';
        $params['urlReturn'] = $this->baseUrl.'/result';

        $service = Utils::PAYMENT_CREATE;

        $request = $this->sendRequest($service, $params, 'POST');
        $redirect = $request["url"] . "?token=" . $request["token"];
        // GENERAR DB

	    return redirect($redirect);
    }
    
}

