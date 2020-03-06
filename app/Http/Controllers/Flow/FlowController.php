<?php

namespace App\Http\Controllers\Flow;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Flow\Utils;
use App\Models\InvoiceModel;
use App\Models\TransaccionModel;
use Exception;
use Session;
use Log;

class FlowController extends Controller
{

    protected $apiKey;
    protected $secretKey;
    protected $apiUrl;
    protected $baseUrl;
	
	public function __construct() {
		$this->apiKey = env('FLOW_APIKEY', "3D0FA275-C8CD-4CFB-AA96-5E967LDB34F5");
        $this->secretKey = env('FLOW_SECRETKEY', "633d34cefda2d5360edbce84e37507da1a464cd3");
        $this->apiUrl = env('FLOW_APIURL', 'https://sandbox.flow.cl/api');
        $this->baseUrl = env('FLOW_BASEURL', 'https://www.pagolibre.cl/apiFlow');
        if($this->apiKey == null || $this->secretKey == null){
            return redirect()->route('home_index');
        }
        
    }

    public function sendRequest($service, $params, $method){
        $response = null;
        $firma = null;
        $url = null;

        $url = $this->apiUrl."/".$service;
        $firma = $this->firma($params);
        $params['s'] = $firma;

        if($method == "POST"){
            $response = $this->httpSendPostRequest($url, $params);
        }else if($method == "GET"){
            $response = $this->httpSendGetRequest($url, $params);
        }
        
        if(!in_array($response["info"]['http_code'], array('200', '400', '401'))) {
            Log::emergency($info['http_code']);
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
        $cURL = curl_init();
        curl_setopt($cURL, CURLOPT_URL, $url);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($cURL, CURLOPT_POST, TRUE);
        curl_setopt($cURL, CURLOPT_POSTFIELDS, $params);
        $response = curl_exec($cURL);
        if($response === false) {
            $error = curl_error($cURL);
            Log::emergency($error);
            throw new Exception($error, 1);
        } 
        $info = curl_getinfo($cURL);
        return array("response" => $response, "info" => $info);
        
    }

    // CONSULTAR DATOS se´gun un servicio
    public function httpSendGetRequest($url, $params){
        $info = null;
        $url = $url . "?" . http_build_query($params);
        $cURL = curl_init();
        curl_setopt($cURL, CURLOPT_URL, $url);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($cURL);
        if($response === false) {
            $error = curl_error($cURL);
            Log::emergency($error);
            throw new Exception($error, 1);
        }
        $info = curl_getinfo($cURL);
        return array("response" => $response, "info" => $info);
        
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
            
            
        } catch (Exception $e) {
            Log::emergency($e);
            Session::flash('error', 'Hubo un error inesperado, intenta más tarde');
            return redirect()->route('pagolibre_index');
        }

        $usuario = Auth::user();
        $usuarioEmail = $usuario->email;
        return view('pago_libre.transaccion.result', compact('usuarioEmail','response'));
    }

    public function confirm(Request $request){
        try {
            if(!isset($request->token)) {
                Log::emergency(["No se recibio el token", 1]);
                throw new Exception("No se recibio el token", 1);
            }
            $token = filter_input(INPUT_POST, 'token');
            $params = array(
                "token" => $token
            );

            $service = Utils::PAYMENT_CREATE_GET_STATUS;
            $response = $this->sendRequest($service, $params, 'GET');
            
            //Actualiza los datos en su sistema
            $transaccion = TransaccionModel::where('commerceOrder', $response['commerceOrder'])->first();
            $transaccion->flowOrder = $response['flowOrder'];
            $transaccion->cod_estado = $response['status'];
            $transaccion->paymentMedia = $response['paymentData']['media'];
            $transaccion->payerEmail = $response['payer'];
            $transaccion->paymenteFee = $response['paymentData']['fee'];
            $transaccion->paymenteTaxes = $response['paymentData']['taxes'];
            $transaccion->paymenteBalance = $response['paymentData']['balance'];
            $transaccion->requestDate = $response['requestDate'];
            $transaccion->paymentDate = $response['paymentData']['date'];
            $transaccion->transferDate = $response['paymentData']['transferDate'];
            $transaccion->save();

        } catch (Exception $e) {
            Log::emergency([$e,$transaccion]);
            
        }
    }

    public function generarPago($params){
        $params['apiKey'] = $this->apiKey;
        $params['urlConfirmation'] = $this->baseUrl.'/confirm';
        $params['urlReturn'] = $this->baseUrl.'/result';
        $service = Utils::PAYMENT_CREATE;
        try {
            $request = $this->sendRequest($service, $params, 'POST');
        } catch (Exception $e) {
            Log::emergency($e);
            return $redirect = array('error' => $e);
        }

        if(isset($request["code"])){
            Log::emergency([$request["message"], $request["code"]]);
            return $redirect = array(
                'message' => $request["message"], 
                'code' => $request["code"]
            );
        }
        
        $redirect = $request["url"] . "?token=" . $request["token"];
	    return $redirect;
    }
    
}

