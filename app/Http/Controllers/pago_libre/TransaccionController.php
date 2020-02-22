<?php

namespace App\Http\Controllers\pago_libre;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Flow\FlowController;
use Illuminate\Support\Facades\Auth;
use App\Models\InvoiceModel;
use App\Models\TransaccionModel;

class TransaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flow = new FlowController();
        $usuario = Auth::user();
        $invoice = InvoiceModel::getInvoiceWhere($request->id)[0];

        $optional = array(
            "rut" => "17244050-9",
            "nombre" => "Rodolfo"
        );
        $optional = json_encode($optional);

        $transaccion = TransaccionModel::create([
            'cod_usuario' => $usuario->id_usuario,
            'invoice_id' => $invoice->fld_Id,
            'flowOrder' => null,
            'cod_estado' => null,
            'subject' => $invoice->fld_DeviceDescription,
            'amount' => $invoice->fld_InvoiceAmount,
            'paymentMedia' => null,
            'payerEmail' => null,
            'paymenteFee' => null,
            'paymenteTaxes' => null,
            'paymenteBalance' => null,
            'requestDate' => null,
            'paymentDate' => null,
            'paymenteTransferDate' => null,
        ]);

        $params = array( 
            "commerceOrder" => $transaccion->cod_transaccion,
            "subject" => $invoice->fld_DeviceDescription,
            "currency" => "CLP",
            "amount"=> $invoice->fld_InvoiceAmount,
            "email" => $usuario->email,
            "paymentMethod" => 9,
            "optional" => $optional,
          );

          
        $flow->prueba($params);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}