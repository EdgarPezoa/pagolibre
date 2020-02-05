<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UsuarioModel extends Authenticatable
{
    use Notifiable;

    protected $connection = 'pagolibre_sqlsrv';
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    public $timestamps = true;


    // protected $fillable = [
        
    // ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
