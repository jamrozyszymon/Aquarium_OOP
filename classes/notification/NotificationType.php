<?php

namespace classes\notification;

class NotificationType
{
    private int $typeOfNotification;

    public function __construct(bool $typeOfNotification)
    {
        $this->typeOfNotification=$typeOfNotification;
    }

    public function typeOfNotification()
    {
        if($this->typeOfNotification==1) {
            return new SendEmail();
        } else if($this->typeOfNotification==2) {
            return new SendSms();
        } else {
            return 'Incorrect type of notification';
        }
    }
}
