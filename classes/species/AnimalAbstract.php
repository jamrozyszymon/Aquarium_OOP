<?php

namespace classes\species;

use classes\species\ActionSpeciesInterface;
use classes\species\swimtype\TypeSwimInterface;
use classes\species\FoodType\TypeFoodInterface;

/**
 * Create Animals
 */
abstract class AnimalAbstract implements ActionSpeciesInterface
{
    /** @var bool */
    private $breathe;

    /** @var bool */
    private $swim;

    /** @var bool */
    private $levelOfHunger;

    /** @var bool */
    private $feed;

    public function __construct()
    {
        $this->breathe = true;
        $this->swim = false;
        $this->levelOfHunger=false;
        $this->feed = true;
    }

    public function breathe()
    {

    }

    /**
     * @param bool $levelOfHunger
     */
    public function setHungryLevel($levelOfHunger)
    {
        $this->levelOfHunger=$levelOfHunger;
    }

    /**
     * @return bool $levelOfHunger
     */
    public function getHungryLevel()
    {
        return $this->levelOfHunger;
    }

    /**
     * @return bool|TypeFooDInterface
     */
    public function feed()
    {
        if(!$this->getHungryLevel()) {
            return false;
        }
        return new TypeFoodInterface;
    }

    /**
     * @return TypeSwimInterface
     */
    abstract public function typeSwim();

     /**
      * @param bool $swimStatus
      * @return void
      */
    public function setSwim(bool $swimStatus)
    {
        if($swimStatus) {
            $this->typeSwim();
            $this->swim=true;
        } else {
            $this->swim=false;
        }
    }

    /**
     * @return bool
     */
    public function getSwim()
    {
        return $this->swim;
    }
}

