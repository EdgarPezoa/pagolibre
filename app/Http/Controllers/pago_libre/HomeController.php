<?php

namespace App\Http\Controllers\pago_libre;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\InvoiceModel;
use App\Models\TransaccionModel;
use Session;

class HomeController extends Controller
{
    public function index(){
        $usuario = Auth::user();
        $usuarioEmail = $usuario->email;
        $invoiceHistorico = InvoiceModel::getInvoiceHistorico();
        Session::flash('success', 'Éxito');
        Session::flash('error', 'Error');
        return view('pago_libre.home.index', compact('usuarioEmail','invoiceHistorico'));
    }

    // @TODOO BORRAR
    public function historicos(){
        $usuarioEmail = Auth::user()->email;
        return view('pago_libre.home.historicos', compact('usuarioEmail'));
    }
}

