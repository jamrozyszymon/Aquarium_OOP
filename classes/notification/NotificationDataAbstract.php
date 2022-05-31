<?php

namespace classes\notification;

use classes\CreatedSpecies;

abstract class NotificationDataAbstract
{
    public function prepareData() :CreatedSpecies
    {
        return new CreatedSpecies();
    }
}
