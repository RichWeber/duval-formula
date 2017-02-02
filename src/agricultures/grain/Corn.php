<?php

namespace richweber\duval\calculator\agricultures\grain;

use richweber\duval\calculator\agricultures\Culture;
use richweber\duval\calculator\agricultures\CultureException;

class Corn implements Culture
{
    /**
     * @var float
     */
    private $_trashPercentageNorm;

    /**
     * @var float
     */
    private $_humidityPercentageNorm;

    /**
     * Culture constructor.
     *
     * @param float $humidityPercentageNorm
     * @param float $trashPercentageNorm
     *
     * @throws \richweber\duval\calculator\agricultures\CultureException
     */
    public function __construct(float $humidityPercentageNorm = 14.0, float $trashPercentageNorm = 2.0)
    {
        if ($humidityPercentageNorm < 0.01 || $humidityPercentageNorm > 100) {
            throw new CultureException('Invalid humidity norm');
        }

        if ($trashPercentageNorm < 0.01 || $trashPercentageNorm > 100) {
            throw new CultureException('Invalid trash norm');
        }

        $this->_humidityPercentageNorm = $humidityPercentageNorm;
        $this->_trashPercentageNorm = $trashPercentageNorm;
    }

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
