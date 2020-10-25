<?php

namespace App\StaticFactory;

abstract class AbstractMessenger implements MessengerInterface
{
    protected $sender;

    protected $recipient;

    protected $message;

    public function setSender($value)
    {
        $this->sender = $value;

        return $this;
    }

    public function setRecipient($value)
    {
        $this->recipient = $value;

        return $this;
    }

    public function setMessage($value)
    {
        $this->message = $value;

        return $this;
    }

    public function send()
    {
        return true;
    }
}