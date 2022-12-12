<?php

namespace DesignPatterns\Adapter\vendors;

class Webmoney {

    function __construct(string $apiKey) {
        /** inialization */
        /** connect to bank account */
        echo "Webmoney inialization\n";
    }

    function getBalance():int {
        return rand(100, 1000);
    }

    function transactionAmount():float {
        return (float) rand(100, 1000);
    }

    function successfullTransaction():bool {
        return true;
    }

}