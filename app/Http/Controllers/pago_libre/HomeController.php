<?php

namespace App\Http\Controllers\pago_libre;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UsersKio_Model;
use Auth;
use Hash;

class HomeController extends Controller
{
    public function index(){

        // dd(Hash::make('rodolfo'));
        // dd(UsersKio_Model::all());        
        return view('pago_libre.home.index', compact(''));
    }
}
