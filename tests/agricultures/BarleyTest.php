<?php

namespace richweber\duval\calculator\tests\agricultures;

use richweber\duval\calculator\agricultures\grain\Barley;

class BarleyTest extends \PHPUnit_Framework_TestCase
{
    public function testBarley()
    {
        $barley = new Barley();
        $this->assertTrue($barley->isGrainCrop());
        $this->assertFalse($barley->isOilseed());
        $this->assertEquals(2.0, $barley->getTrashPercentageNorm());
        $this->assertEquals(14.0, $barley->getHumidityPercentageNorm());
    }
} 
