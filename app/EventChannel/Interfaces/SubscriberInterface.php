<?php


namespace App\EventChannel\Interfaces;


interface SubscriberInterface
{
    public function notify($data);
}