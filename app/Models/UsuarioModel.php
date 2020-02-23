<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UsuarioModel extends Authenticatable
{
    use Notifiable;

    protected $connection = 'mysql';
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    public $timestamps = true;

    protected $fillable = [
        'email',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
