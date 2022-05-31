<?php

namespace classes\species;

use classes\species\FoodType\FoodForTurtle;
use classes\species\FoodType\TypeFoodInterface;
use classes\species\swimtype\SwimSlow;
use classes\species\SwimType\TypeSwimInterface;

/**
 * Manage turtle
 */
class Turtle extends AnimalAbstract
{
    /**
     * @inheritdoc
     */
    public function breathe()
    {
        
    }
    public function typeSwim(): TypeSwimInterface
    {
        return new SwimSlow();
    }
    
    public function typeFood(): TypeFoodInterface
    {
        return new FoodForTurtle();
    }
  
}
