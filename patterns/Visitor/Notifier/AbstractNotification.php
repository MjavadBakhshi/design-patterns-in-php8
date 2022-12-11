<?php

namespace DesignPatterns\Visitor\Notifier;

use DesignPatterns\Visitor\Operations\AbstractNotificationOperation;

abstract class AbstractNotification {
    function execute(AbstractNotificationOperation $operation) {
        $operation->apply($this);
    }
}