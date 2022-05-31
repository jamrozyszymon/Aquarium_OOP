<?php

namespace classes\equipment;

/**
 * Manage heater mode
 */
class Heater
{
    public function __construct(int $mode)
    {
        $this->mode=$mode;
    }

    /**
     * Return level of heater's work
     * @param int $mode
     * @return string
     */
    public function useHeater(int $mode)
    {
        if($this->mode==1) {
            return 'Heater work on low power';
        } else if($this->mode==2) {
            return 'Heater work on medium power';
        } else if($this->mode==3) {
            return 'Heater work on high power';
        } else {
            return 'Incorrect value. Please choose 1, 2 or 3';
        }
    }
}