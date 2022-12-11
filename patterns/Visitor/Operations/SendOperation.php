<?php

namespace DesignPatterns\Visitor\Operations;

class SendOperation extends AbstractNotificationOperation {

    function applyByEmail(){
        echo "Send by Email.\n";
    }

    function applyBySMS(){
        echo "Send by SMS.\n";
    }

    function applyByTelegram(){
        echo "Send by Telegram.\n";
    }
}