<?php

namespace App\Http\Controllers\Flow;

use App\Http\Controllers\Controller;

class Utils extends Controller
{
    // URL CONFIRMATION
    public const PAYMENT_CREATE = "payment/create";
    public const PAYMENT_CREATE_GET_STATUS = "payment/getStatus";

    // URL CONFIRMATION
    public const PAYMENT_CREATE_EMAIL = "payment/createEmail";
    public const PAYMENT_CREATE_EMAIL_GET_STATUS = "payment/getStatus";

    // URL CALLBACK
    public const REFUND_CREATE = "refund/create";
    public const REFUND_CREATE_GET_STATUS = "refund/getStatus";
    
    // URL RETURN
    public const CUSTOMER_REGISTER = "customer/register";
    public const CUSTOMER_GET_REGISTER_STATUS = "getRegisterStatus";

    // URL CONFIRMATION
    public const CUSTOMER_COLLECT = "customer/collect";
    public const CUSTOMER_COLLECT_GET_STATUS = "payment/getStatus";
        
}
