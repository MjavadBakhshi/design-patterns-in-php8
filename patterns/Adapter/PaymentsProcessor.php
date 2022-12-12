<?php

namespace DesignPatterns\Adapter;

use DesignPatterns\Adapter\PaymentProviderInterface;

class PaymentsProcessor {
    private array $paymentRecords;

    function add(PaymentProviderInterface $record)
    {
        $this->paymentRecords[] = $record;
    }

    function getTotalPaid()
    {
        $total = 0;
        foreach($this->paymentRecords as $record)
            $total += $record->isSuccess() ? $record->getPaymentAmount() : 0;
        
        return $total;
    }


}