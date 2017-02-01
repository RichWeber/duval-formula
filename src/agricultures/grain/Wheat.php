<?php

namespace richweber\duval\calculator\agricultures\grain;

use richweber\duval\calculator\agricultures\Culture;

class Wheat implements Culture
{
    /**
     * @var float
     */
    private $_trashPercentageNorm = 2.0;

    /**
     * @var float
     */
    private $_humidityPercentageNorm = 14.0;

    /**
     * Get norm of garbage impurities
     * @return float
     */
    public function getTrashPercentageNorm() : float
    {
        return $this->_trashPercentageNorm;
    }

    /**
     * Get norm of humidity
     * @return float
     */
    public function getHumidityPercentageNorm() : float
    {
        return $this->_humidityPercentageNorm;
    }

    /**
     * Get type of grain crop
     * @return bool
     */
    public function isGrainCrop() : bool
    {
        return true;
    }

    /**
     * Get type of grain crop
     * @return bool
     */
    public function isOilseed() : bool
    {
        return $this->isGrainCrop() !== true;
    }
}
