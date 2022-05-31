<?php

namespace classes\species\FoodType;

class FoodForFish implements TypeFoodInterface
{
    /**
     * @inheritdoc
     */
    public function typeFood()
    {
        return "It's food for fish";
    }
}
