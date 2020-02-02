<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class UsersKio_Model extends Model implements AuthenticatableContract
{
    use Authenticatable;
    
    public $timestamps = false;
    protected $table = 'tbl_SystemUser';    
    protected $primaryKey = 'fld_id';
    protected $dateFormat = 'Y-d-m H:i:s';

    public function getAuthPassword(){
        return $this->fld_UserPassword;
    }
}
