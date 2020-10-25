<?php


namespace App\Delegation\Messengers;

use App\Delegation\Classes\AbstractMessenger;
use Barryvdh\Debugbar\Facade as Debugbar;

class SmsMessenger extends AbstractMessenger
{
    public function send()
    {
        Debugbar::info('sent by ' . __METHOD__ );

        return parent::send();
    }
}