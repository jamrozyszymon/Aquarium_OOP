<?php

namespace classes;

use classes\species\Fish;
use classes\species\Plant;
use classes\species\Turtle;
use classes\equipment\Heater;
use classes\equipment\Filter;
use classes\equipment\FilterSimple;
use classes\equipment\FilterAdvanced;
use classes\notification\NotificationType;

/**
 * Main class of Aquarium
 */
class Aquarium
{
    /** @var Fish */
    private $fish;

    /** @var Turtle */
    private $turtle;

    /** @var Plant */
    private $plant;

    /** @var Heater */
    private $heater;

    /** @var Filter */
    private $filterType;

    /** @var bool */
    private $hunger;

    /** @var NotificationType */
    private $notification;

    /** @var bool */
    private $light;

    public function __construct(Fish $fish, Turtle $turtle, Plant $plant, Heater $heater, Filter $filterType, NotificationType $notification)
    {
        $this->fish=$fish;
        $this->turtle=$turtle;
        $this->plant=$plant;

        $this->heater=$heater;
        $this->filterType=$filterType;
        $this->hunger=false;
        $this->notification=$notification;
        $this->light=false;
    }

    /**
     * @param int $heaterMode
     */
    public function setHeater(int $heaterMode)
    {
        $this->heaterMode=$heaterMode;
    }

    /**
     * @return int $heaterMode
     */
    public function getHeater(): int
    {
        return $this->heater->useHeater($this->heaterMode);
    }

    /**
     * @param int $filterType
     */
    public function setFilter(int $filterType)
    {
        $this->filterType=$filterType;
    }

    /**
     * @return FilterSimple|FilterAdvanced|string
     */
    public function getFilter()
    {
        if($this->filterType==1) {
            return new FilterSimple();
        } else if($this->filterType==2) {
            return new FilterAdvanced();
        } else {
            return 'Incorrect type of filter';
        }
    }

    /**
     * @param bool $light
     */
    public function setLight($light)
    {
        $this->light=$light;
    }

    /**
     * @return bool
     */
    public function light(): bool
    {
        return $this->light;
    }

    /**
     * @param bool $hunger
     */
    public function setHunger(bool $hunger)
    {
        $this->hunger=$hunger;
    }

    /**
     * Condition for status of light and hunger
     */
    public function behaviourAnimal() : void
    {
        if($this->light) {
           $this->fish->getSwim();
           $this->turtle->getSwim();
        } else {
            $this->fish->getSwim->false;
            $this->turtle->getSwim->false;
        }

        if($this->hunger) {
            $this->fish->setHungryLevel(true);
            $this->turtle->setHungryLevel(true);
        }
    }

    /**
     * @return bool $notificationType
     */
    public function setNotificationType(bool $notificationType)
    {
        $this->notificationType=$notificationType;
    }

    /**
     * Check existing of species for send notification
     */
    public function checkSpecies() : void
    {
        if($this->fish || $this->turtle || $this->plant) {
            $this->notification->typeOfNotification($this->notificationType);
        }
    }
}

$aquarium= new Aquarium(new Fish(1,1), new Turtle(0,0), new Plant(), new Heater(1), new Filter(1), new NotificationType(1));
echo '<pre>',print_r($aquarium), '</pre>';
echo '</br>';
$res=$aquarium->checkSpecies();
print_r($res);
