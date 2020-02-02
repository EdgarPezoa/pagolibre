<?php

namespace App\Http\Controllers\pago_facil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UsersKio_Model;

class HomeController extends Controller
{
    public function index(){

        dd(UsersKio_Model::all());
        return view('pago_facil.home.index', compact(''));
    }
}
