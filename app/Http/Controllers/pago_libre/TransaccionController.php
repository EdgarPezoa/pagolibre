<?php

namespace App\Http\Controllers\pago_libre;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Flow\FlowController;
use Illuminate\Support\Facades\Auth;
use App\Models\InvoiceModel;
use App\Models\TransaccionModel;
use Excetion;

class TransaccionController extends Controller
{

    public function index()
    {
        
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $flow = new FlowController();
        $usuario = Auth::user();
        $invoice = InvoiceModel::getInvoiceWhereFactura($request->id);

        $optional = array(
            "rut" => "17244050-9",
            "nombre" => "Rodolfo"
        );
        $optional = json_encode($optional);
        $transaccion = TransaccionModel::create([
            'cod_usuario' => $usuario->id_usuario,
            'invoice_id' => $invoice->fld_Id,
            'flowOrder' => null,
            'cod_estado' => 1,
            'subject' => $invoice->fld_DeviceDescription,
            'amount' => number_format($invoice->fld_InvoiceAmount,0,'',''),
            'paymentMedia' => null,
            'payerEmail' => null,
            'paymenteFee' => null,
            'paymenteTaxes' => null,
            'paymenteBalance' => null,
            'requestDate' => null,
            'paymentDate' => null,
            'paymentTransferDate' => null,
        ]);

        $params = array( 
            "commerceOrder" => $transaccion->cod_transaccion,
            "subject" => $invoice->fld_DeviceDescription,
            "currency" => "CLP",
            "amount"=> number_format($invoice->fld_InvoiceAmount,0,'',''),
            "email" => $usuario->email,
            "paymentMethod" => 9,
            "optional" => $optional,
          );

        try {
            $redirect = $flow->generarPago($params);
            if(isset($redirect['error'])){
                Log::emergency($redirect['error']);
                throw new Exception($redirect['error']);

            }else if(isset($redirect['code'])){
                Log::emergency([$redirect['code'],$redirect['message']]);
                throw new Exception($redirect['code'],$redirect['message']);
            }
            
        } catch (Excetion $e) {
            Log::emergency($e);
            Session::flash('error', 'Hubo un error inesperado, intenta más tarde');
            return redirect()->route('pagolibre_index');
        }
        
        return redirect($redirect);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}
