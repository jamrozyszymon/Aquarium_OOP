<?php

namespace classes\notification;

use classes\notification\NotificationDataAbstract;

class SendEmail extends NotificationDataAbstract implements NotificationInterface
{
    public function send()
    {
        return 'Email was sent';
    }
}
