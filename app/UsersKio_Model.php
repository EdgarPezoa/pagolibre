<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersKio_Model extends Model
{
    public $timestamps = false;
    protected $table = 'tbl_SystemUser';    
    protected $primaryKey = 'fld_id';
    protected $dateFormat = 'Y-d-m H:i:s';

    public function getAuthPassword(){
        return $this->fld_UserPassword;
    }
}
