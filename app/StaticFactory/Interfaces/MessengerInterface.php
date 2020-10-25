<?php


namespace App\StaticFactory\Interfaces;


interface MessengerInterface
{
    public function setSender($value);

    public function setRecipient($value);

    public function setMessage($value);

    public function send();

}