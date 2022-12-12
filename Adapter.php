<?php

use DesignPatterns\Adapter\{
    PaymentsProcessor,
    Adapters\PaypalAdapter,
    Adapters\WebmoneyAdapter,
};
use DesignPatterns\Adapter\vendors\{
    PaypalGetway,
    Webmoney
};

require "vendor/autoload.php";



/** Here we are able to process across all user payments without worrying about
 * the payment has been done by which getway.
 * Also it is possible we reuse third-pary vendors which help us to
 * do fast instead of implementing from scratch.
 * 
 * So this is appropriate usecase to leverage AdapterPattern.
*/

$payments = [
    new PaypalAdapter(new PaypalGetway('123456')),
    new PaypalAdapter(new PaypalGetway('123456')),
    new WebmoneyAdapter(new Webmoney('12dsflj34'))
];

$paymentsProcessor = new PaymentsProcessor();
foreach($payments as $payment) $paymentsProcessor->add($payment);
echo "Total paid is $".$paymentsProcessor->getTotalPaid();
