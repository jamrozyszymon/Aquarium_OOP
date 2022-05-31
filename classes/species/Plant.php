<?php

namespace classes\species;
use classes\species\ActionSpeciesInterface;

/**
 * create Plants
 */
class Plant implements ActionSpeciesInterface
{
    /**
     * @inheritdoc
     */
    public function breathe()
    {
        return 'Plant breathe';
    }
}
