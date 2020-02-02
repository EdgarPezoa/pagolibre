<?php

namespace App\Http\Controllers\pago_facil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\UsersKio_Model;
use Hash;

class HomeController extends Controller
{
    public function index(){

        // dd(Hash::make('rodolfo'));
        // dd(UsersKio_Model::all());        
        return view('pago_facil.home.index', compact(''));
    }
}
