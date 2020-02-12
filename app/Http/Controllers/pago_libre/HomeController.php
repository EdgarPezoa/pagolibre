<?php

namespace App\Http\Controllers\pago_libre;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('pago_libre.home.index', compact(''));
    }
}
