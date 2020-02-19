<?php

namespace App\Http\Controllers\pago_libre;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $usuarioEmail = Auth::user()->email;
        return view('pago_libre.home.index', compact('usuarioEmail'));
    }
}
DB::connection('KlmIOT_sqlsrv')->select("select i.fld_Id, i.fld_DeviceDescription, i.fld_InvoiceStartDateTime, i.fld_InvoiceEndDateTime, i.fld_InvoiceStartIndex, i.fld_InvoiceEndIndex, i.fld_InvoiceConsumption, i.fld_InvoiceAmount from tbl_EM_Invoice i inner join tbl_EM_InvoiceDetail d on i.fld_Id=d.fld_InvoiceId inner join tbl_EM_Device de on d.fld_DeviceId=de.fld_Id where de.fld_Id=4 and i.fld_InvoiceConfirmed = 1;");