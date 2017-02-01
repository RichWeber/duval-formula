<?php

namespace richweber\duval\calculator\calculator;

class GrainQuality
{
    private $_humidityPercentage;
    private $_trashPercentage;

    public function __construct(float $humidityPercentage, float $trashPercentage)
    {
        $this->_humidityPercentage = $humidityPercentage;
        $this->_trashPercentage = $trashPercentage;
    }

    /**
     * @return float
     */
    public function getHumidityPercentage() : float
    {
        return $this->_humidityPercentage;
    }

    /**
     * @return float
     */
    public function getTrashPercentage() : float
    {
        return $this->_trashPercentage;
    }
}
