<?php

namespace DesignPatterns\Observer;

class User implements ListenerInterface
{

    function __construct(private string $fullName)
    {
    }

    function update()
    {
        echo "{$this->fullName} new video has been uploaded.\n";
    }
}
