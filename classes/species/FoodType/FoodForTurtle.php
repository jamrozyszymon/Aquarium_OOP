<?php

namespace classes\species\FoodType;

class FoodForTurtle implements TypeFoodInterface
{
    /**
     * @inheritdoc
     */
    public function typeFood()
    {
        return "It's food for turtle";
    }
}
