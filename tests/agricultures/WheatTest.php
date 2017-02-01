<?php

namespace richweber\duval\calculator\tests\agricultures;

use richweber\duval\calculator\agricultures\grain\Wheat;

class WheatTest extends \PHPUnit_Framework_TestCase
{
    public function testWheat()
    {
        $barley = new Wheat();
        $this->assertTrue($barley->isGrainCrop());
        $this->assertFalse($barley->isOilseed());
        $this->assertEquals(2.0, $barley->getTrashPercentageNorm());
        $this->assertEquals(14.0, $barley->getHumidityPercentageNorm());
    }
} 
