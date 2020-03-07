<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;

class InvoiceModel extends Model
{
    protected $connection = 'KlmIOT_sqlsrv';
    protected $table = 'tbl_Em_Invoice';
    protected $primaryKey = 'fld_Id';
    public $timestamps = true;

    protected $fillable = [
        '',
    ];

    public static function getInvoiceFactura(){
        $usuario = Auth::user();
        $device = $usuario->device;
        $invoice = DB::connection('KlmIOT_sqlsrv')->select("select i.fld_Id, i.fld_DeviceDescription, i.fld_InvoiceStartDateTime, i.fld_InvoiceEndDateTime, i.fld_InvoiceStartIndex, i.fld_InvoiceEndIndex, i.fld_InvoiceConsumption, i.fld_InvoiceAmount from tbl_EM_Invoice i inner join tbl_EM_InvoiceDetail d on i.fld_Id=d.fld_InvoiceId inner join tbl_EM_Device de on d.fld_DeviceId=de.fld_Id where de.fld_Id=".$device);
        if($invoice != null){
            return $invoice;
        }else{
             return null;
        }
        

    }
    
    public static function getInvoiceWhereFactura($id){
        return DB::connection('KlmIOT_sqlsrv')->select("select i.fld_Id, i.fld_DeviceDescription, i.fld_InvoiceStartDateTime, i.fld_InvoiceEndDateTime, i.fld_InvoiceStartIndex, i.fld_InvoiceEndIndex, i.fld_InvoiceConsumption, i.fld_InvoiceAmount from tbl_EM_Invoice i inner join tbl_EM_InvoiceDetail d on i.fld_Id=d.fld_InvoiceId inner join tbl_EM_Device de on d.fld_DeviceId=de.fld_Id where de.fld_Id=".$device." and i.fld_Id=".$id.";")[0];
    }
        
}
