<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaccionModel extends Model
{
    protected $connection = 'pagolibre_sqlsrv';
    protected $table = 'transacciones';
    protected $primaryKey = 'cod_transaccion';
    public $timestamps = true;

    protected $fillable = [
        'cod_usuario',
        'invoice_id',
        'cod_estado',
        'flowOrder',
        'subject',
        'amount',
        'paymentMedia',
        'payerEmail',
        'paymenteFee',
        'paymenteTaxes',
        'paymenteBalance',
        'requestDate',
        'paymentDate',
        'paymentTransferDate',
        'updated_at',
        'created_at'
    ];
}
