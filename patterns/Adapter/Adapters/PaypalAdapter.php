<?php

namespace DesignPatterns\Adapter\Adapters;

use DesignPatterns\Adapter\PaymentProviderInterface;
use DesignPatterns\Adapter\vendors\PaypalGetway;

class PaypalAdapter implements PaymentProviderInterface {
    
    private array $paymentDetail;

    function __construct(private PaypalGetway $paypalGetway){
        $paypalGetway->connect();
        $this->paymentDetail = $paypalGetway->getDetails();
        $paypalGetway->disconnect();
    }
    
    function getPaymentAmount():float {
        return $this->paymentDetail['amount'];
    }
    
    function isSuccess():bool {
        return $this->paymentDetail['status_code'] == 200;
    }
}