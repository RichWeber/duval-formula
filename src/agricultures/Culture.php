<?php

namespace richweber\duval\calculator\agricultures;

interface Culture
{
    /**
     * Get norm of garbage impurities
     * @return float
     */
    public function getTrashPercentageNorm();

    /**
     * Get norm of humidity
     * @return float
     */
    public function getHumidityPercentageNorm();

    /**
     * Get type of grain crop
     * @return bool
     */
    public function isGrainCrop();

    /**
     * Get type of grain crop
     * @return bool
     */
    public function isOilseed();
}
