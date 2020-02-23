<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaccionModel extends Model
{
    protected $connection = 'mysql';
    protected $table = 'transacciones';
    protected $primaryKey = 'cod_transaccion';
    public $timestamps = true;

    protected $fillable = [
        'cod_usuario',
        'invoice_id',
        'subject',
        'amount',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
    ];
}
