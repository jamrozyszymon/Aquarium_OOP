<?php

namespace classes\equipment;

class FilterSimple extends Filter
{
    /**
     * @inheritdoc
     */
    public function typeFilter()
    {
        return "It's simple filter";
    }

    /**
     * Return method of choosen filter
     */
    public function start()
    {
        return 'Filter was start';
    }
}


