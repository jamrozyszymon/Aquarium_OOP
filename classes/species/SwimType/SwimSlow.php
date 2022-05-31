<?php

namespace classes\species\swimtype;

class SwimSlow implements TypeSwimInterface
{
    /**
     * @inheritdoc
     */
    public function typeSwim()
    {
        return 'Swim slow';
    }
}
