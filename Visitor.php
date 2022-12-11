<?php

use DesignPatterns\Visitor\Notifier\{
    EmailNotification,
    SMSNotification,
    TelegramNotification
};
use DesignPatterns\Visitor\Operations\{
    AbstractNotificationOperation,
    SendOperation
};

require "vendor/autoload.php";

class NotificationQueue {
    function __construct(private array $messages){}
    
    function execute(AbstractNotificationOperation $operation){
        foreach($this->messages as $message)
              $message->execute($operation);
    }
}


/** Here we are able to send bunch of messages through diffrent medias */

/** However, the elements can be provided by anouther source such as User model. */
/* Suppose some users have set only phone and anothers set only Email and so on.
 * so we can call $user->getNotifier(): AbstractNotification methode.
 * 
 * foreach($users as $user)
 *   $notifiers[] = $user->getNotifier();
 * 
 * $queue = new NotificationQueue($notifiers);
 * 
 * something like that ..
 */
$queue = new NotificationQueue([
    new SMSNotification(),
    new EmailNotification(),
    new TelegramNotification(),
    new SMSNotification(),
]);
/** Send messages */
$queue->execute(new SendOperation());
/** Check delivery status */
// $queue->execute(new CheckDeliveryStatusOperation());

// we can add any new opeation that can be applied to the queue
// without changing the concrete implementations.