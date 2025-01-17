<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoModel extends Model
{
    protected $connection = 'pagolibre_sqlsrv';
    protected $table = 'estados';
    protected $primaryKey = 'cod_estado';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
    ];
}
