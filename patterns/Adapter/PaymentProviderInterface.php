<?php

namespace DesignPatterns\Adapter;

interface PaymentProviderInterface {
    function getPaymentAmount():float;
    function isSuccess():bool;
}