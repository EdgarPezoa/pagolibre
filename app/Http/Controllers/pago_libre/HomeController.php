<?php

namespace App\Http\Controllers\pago_libre;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\InvoiceModel;

class HomeController extends Controller
{
    public function index(){
        $usuarioEmail = Auth::user()->email;        
        return view('pago_libre.home.index', compact('usuarioEmail'));
    }
}