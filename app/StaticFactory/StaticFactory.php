<?php


namespace App\StaticFactory;


use App\StaticFactory\Classes\AppMessenger;
use App\StaticFactory\Interfaces\MessengerStaticFactoryInterface;

class StaticFactory implements MessengerStaticFactoryInterface
{
    public static function build($type = 'email') //: MessengerInterface
    {
        $messenger = new AppMessenger();

        switch ($type) {
            case 'email' :
                $messenger->toEmail();
                $sender = 'admin@local.com';
                break;
            case 'sms' :
                $messenger->toSms();
                $sender = '87777777777';
                break;
            default:
                throw new \Exception('Неизвестный типа [{$type]');
        }

        $messenger
            ->setSender($sender)
            ->setMessage('default message');

        return $messenger;
    }
}