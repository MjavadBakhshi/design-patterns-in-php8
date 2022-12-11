<?php

namespace DesignPatterns\Visitor\Operations;

use DesignPatterns\Visitor\Notifier\{
    AbstractNotification,
    EmailNotification,
    SMSNotification,
    TelegramNotification
};

abstract class AbstractNotificationOperation {
   /** 
    * This is a factory class that let us 
    * to simulate overloading functionality in the PHP.
    */
    final function apply(AbstractNotification $notifier) {
        $action = 'applyBy';

        switch(get_class($notifier))
        {
            case EmailNotification::class :
                $action .= 'Email';
            break;
            case SMSNotification::class :
                $action .= 'SMS';
            break;
            case TelegramNotification::class :
                $action .= 'Telegram';
            break;
        }

        $this->$action();
    }

    abstract function applyByEmail();
    abstract function applyBySMS();
    abstract function applyByTelegram();
}