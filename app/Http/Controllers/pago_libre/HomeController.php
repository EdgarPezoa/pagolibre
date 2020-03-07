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
        $facturas = array();
        $usuario = Auth::user();
        $usuarioEmail = $usuario->email;
        $invoiceFacturas = InvoiceModel::getInvoiceFactura();

        foreach($invoiceFacturas as $invoiceFactura){
            $transaccion = TransaccionModel::where('invoice_id', '=', $invoiceFactura->fld_Id)->where('cod_usuario', '=', $usuario->id_usuario)->where('cod_estado', '=', 2)->first();
            if(!isset($transaccion)){
                array_push($facturas, $invoiceFactura);
            }
        }
        
        return view('pago_libre.home.index', compact('usuarioEmail','facturas'));
    }

    // @TODOO BORRAR
    public function historicos(){
        $usuarioEmail = Auth::user()->email;
        return view('pago_libre.home.historicos', compact('usuarioEmail'));
    }
}

