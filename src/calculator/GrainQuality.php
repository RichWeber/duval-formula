<?php

namespace richweber\duval\calculator\calculator;

/**
 * Class GrainQuality
 * @package richweber\duval\calculator\calculator
 */
class GrainQuality
{
    /**
     * @var float
     */
    protected $humidityPercentage;

    /**
     * @var float
     */
    protected $trashPercentage;

    /**
     * GrainQuality constructor.
     *
     * @param float $humidityPercentage
     * @param float $trashPercentage
     */
    public function __construct(float $humidityPercentage, float $trashPercentage)
    {
        $this->humidityPercentage = $humidityPercentage;
        $this->trashPercentage = $trashPercentage;
    }

    /**
     * @return float
     */
    public function getHumidityPercentage() : float
    {
        return $this->humidityPercentage;
    }

    /**
     * @return float
     */
    public function getTrashPercentage() : float
    {
        return $this->trashPercentage;
    }
}
