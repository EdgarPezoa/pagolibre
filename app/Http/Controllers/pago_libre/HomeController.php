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
        $invoiceFactura = InvoiceModel::getInvoiceFactura();
        $transaccion = TransaccionModel::where('invoice_id', '=', $invoiceFactura->fld_Id)->where('cod_usuario', '=', $usuario->id_usuario)->where('cod_estado', '=', 2)->first();
        if(isset($transaccion) && $transaccion->cod_estado == 2){
            $invoiceFactura = null;
        }
        
        return view('pago_libre.home.index', compact('usuarioEmail','invoiceFactura'));
    }

    // @TODOO BORRAR
    public function historicos(){
        $usuarioEmail = Auth::user()->email;
        return view('pago_libre.home.historicos', compact('usuarioEmail'));
    }
}

