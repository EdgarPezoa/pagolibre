<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UsersKio_Model extends Authenticatable
{
    use Notifiable;
    
    // protected $fillable = [
        
    // ];

    // protected $hidden = [
    //     'fld_UserPassword', 'remember_token',
    // ];

    public $timestamps = false;
    protected $table = 'tbl_SystemUser';
    protected $primaryKey = 'fld_id';
    protected $dateFormat = 'Y-d-m H:i:s';

    public function getAuthPassword(){
        return $this->fld_UserPassword;
    }
}
