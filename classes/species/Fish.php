<?php

namespace classes\species;

use classes\species\FoodType\FoodForFish;
use classes\species\FoodType\TypeFoodInterface;
use classes\species\swimtype\SwimFast;
use classes\species\SwimType\TypeSwimInterface;

/**
 * Manage fish
 */
class Fish extends AnimalAbstract
{
    /**
     * @inheritdoc
     */
    public function breathe()
    {
        return 'Fish breathe';
    }

    public function typeSwim(): TypeSwimInterface
    {
        return new SwimFast();
    }
    
    public function typeFood(): TypeFoodInterface
    {
        return new FoodForFish();
    }
}
