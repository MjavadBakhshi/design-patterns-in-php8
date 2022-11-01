<?php

namespace DesignPatterns\Observer;

/**
 * This class also can change to Trait to use as part of each class which
 * needs the event-listener paattern functionality.
 */
abstract class  AbstractEvent
{
    private array $subscribers = [];

    function __construct(array $subscribers = [])
    {
        foreach ($subscribers as $subscriber)
            $this->attach($subscriber);
    }

    function attach(ListenerInterface $subscriber): void
    {
        $this->subscribers[] = $subscriber;
    }

    function detach(ListenerInterface $subscriber)
    {
        $this->subscribers = array_filter(
            $this->subscribers,
            function ($listener) use ($subscriber) {
                return $listener != $subscriber;
            }
        );
    }

    function notifySubscribers(): void
    {
        foreach ($this->subscribers as $subscriber)
            $subscriber->update();
    }
}
