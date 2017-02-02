<?php

namespace richweber\duval\calculator\agricultures;

/**
 * Class OtherCulture
 * @package richweber\duval\calculator\agricultures
 */
class OtherCulture implements Culture
{
    /**
     * @var float
     */
    protected $trashPercentageNorm;

    /**
     * @var float
     */
    protected $humidityPercentageNorm;

    /**
     * Culture constructor.
     *
     * @param float $humidityPercentageNorm
     * @param float $trashPercentageNorm
     *
     * @throws \richweber\duval\calculator\agricultures\CultureException
     */
    public function __construct(float $humidityPercentageNorm = 0.01, float $trashPercentageNorm = 0.01)
    {
        if ($humidityPercentageNorm < 0.01 || $humidityPercentageNorm > 100) {
            throw new CultureException('Invalid humidity norm');
        }

        if ($trashPercentageNorm < 0.01 || $trashPercentageNorm > 100) {
            throw new CultureException('Invalid trash norm');
        }

        $this->humidityPercentageNorm = $humidityPercentageNorm;
        $this->trashPercentageNorm = $trashPercentageNorm;
    }

    /**
     * Get norm of garbage impurities
     * @return float
     */
    public function getTrashPercentageNorm() : float
    {
        return $this->trashPercentageNorm;
    }

    /**
     * Get norm of humidity
     * @return float
     */
    public function getHumidityPercentageNorm() : float
    {
        return $this->humidityPercentageNorm;
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
