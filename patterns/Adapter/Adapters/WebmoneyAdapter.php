<?php

namespace DesignPatterns\Adapter\Adapters;

use DesignPatterns\Adapter\PaymentProviderInterface;
use DesignPatterns\Adapter\vendors\Webmoney;

class WebmoneyAdapter implements PaymentProviderInterface {
    
    function __construct(private Webmoney $webmoney) {}
    
    function getPaymentAmount():float {
        return $this->webmoney->transactionAmount();
    }
    
    function isSuccess():bool {
        return $this->webmoney->successfullTransaction();
    }
}