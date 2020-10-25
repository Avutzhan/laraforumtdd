<?php


namespace App\EventChannel\Interfaces;


interface EventChannelInterface
{
    public function publish($topic, $data);

    public function subscribe($topic, SubscriberInterface $subscriber);
}