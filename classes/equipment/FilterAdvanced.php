<?php

namespace classes\equipment;

class FilterAdvanced extends Filter
{
    /**
     * 
     * @inheritdoc
     */
    public function typeFilter()
    {
        return "It's advanced filter";
    }

    /**
     * Return method of choosen filter
     * @return string
     */
    public function filter()
    {
        return 'Filter was filtering';
    }
}
