<?php


namespace App\EventChannel\Interfaces;


interface PublisherInterface
{
    public function publish($data);
}