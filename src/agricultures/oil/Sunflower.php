<?php

namespace richweber\duval\calculator\agricultures\oil;

use richweber\duval\calculator\agricultures\Culture;

class Sunflower implements Culture
{
    /**
     * @var float
     */
    private $_trashPercentageNorm = 3.0;

    /**
     * @var float
     */
    private $_humidityPercentageNorm = 8.0;

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
        return false;
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
