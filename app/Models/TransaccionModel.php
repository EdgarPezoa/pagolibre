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
        'nombre',
    ];
}
