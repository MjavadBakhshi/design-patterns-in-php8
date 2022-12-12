<?php

namespace DesignPatterns\Adapter\vendors;

class PaypalGetway {

    function __construct($secretKey) {
        /** Do some sort of initialization. */
        echo "Paypal getway initialization\n";
    }

    function connect() {/** coonect to paypal server */}
    function disconnect() {/** free resorces and disconnect */}

    function getDetails():array {
        /** details of transaction. */
        return [
            'status_code' => 200,
            'amount' => (float) rand(100, 1000)
        ];
    }

}