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
    
    public function index(){
        dd("apiKey: ".$this->secretKey);
        return view('home.index', compact(''));
    }
    
}

