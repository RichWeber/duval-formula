<?php

namespace richweber\duval\calculator\calculator;

use richweber\duval\calculator\agricultures\Culture;

/**
 * Class Calculator
 * @package richweber\duval\calculator\calculator
 */
final class Calculator
{
    /**
     * @var Culture
     */
    private $_culture;

    /**
     * @var GrainQuality
     */
    private $_grainQuality;

    /**
     * @var int
     */
    private $_startWeight;

    /**
     * @var float
     */
    private $_finishWeight;

    /**
     * @var float
     */
    private $_trashCoefficient;

    /**
     * @var float
     */
    private $_humidityCoefficient;

    /**
     * Calculator constructor.
     *
     * @param Culture $culture
     * @param GrainQuality $grainQuality
     * @param int $weight
     */
    public function __construct(Culture $culture, GrainQuality $grainQuality, int $weight)
    {
        $this->_culture = $culture;
        $this->_grainQuality = $grainQuality;
        $this->_startWeight = $weight;
        $this->calculate();
    }

    /**
     * @return int
     */
    public function getStartWeight(): int
    {
        return $this->_startWeight;
    }

    /**
     * @return float
     */
    public function getFinishWeight()
    {
        return $this->_finishWeight;
    }

    /**
     * @return float
     */
    public function getLostWeight()
    {
        return round($this->_startWeight - $this->_finishWeight, 2);
    }

    /**
     * Calculate
     */
    private function calculate() : void
    {
        $result = $this->_startWeight
            - ($this->_startWeight  * (($this->getTrashReduction()
                        + $this->getHumidityReduction()) / 100));
        $this->_finishWeight = round($result, 4);
    }

    /**
     * @return float
     */
    private function getTrashReduction() : float
    {
        $result = (100 - $this->getHumidityReduction())
            * ($this->_grainQuality->getTrashPercentage() - $this->_culture->getTrashPercentageNorm())
            / (100 - $this->_culture->getTrashPercentageNorm());
        $result = round($result, 4);

        $this->_trashCoefficient = $result;

        return $result;
    }

    /**
     * @return float
     */
    private function getHumidityReduction() : float
    {
        $result = (100 * ($this->_grainQuality->getHumidityPercentage() - $this->_culture->getHumidityPercentageNorm()))
            / (100 - $this->_culture->getHumidityPercentageNorm());
        $result = round($result, 4);

        $this->_humidityCoefficient = $result;

        return $result;
    }

    /**
     * @return float
     */
    public function getTrashCoefficient() : float
    {
        return $this->_trashCoefficient;
    }

    /**
     * @return float
     */
    public function getHumidityCoefficient() : float
    {
        return $this->_humidityCoefficient;
    }
}
