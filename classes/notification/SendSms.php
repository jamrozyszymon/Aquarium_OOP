<?php

namespace classes\notification;

use classes\notification\NotificationDataAbstract;

class SendSms extends NotificationDataAbstract implements NotificationInterface
{
    public function send()
    {
        return 'Sms was sent';
    }
}
