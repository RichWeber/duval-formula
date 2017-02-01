<?php

namespace richweber\duval\calculator\tests\agricultures;

use richweber\duval\calculator\agricultures\oil\Sunflower;

class SunflowerTest extends \PHPUnit_Framework_TestCase
{
    public function testSunflower()
    {
        $barley = new Sunflower();
        $this->assertFalse($barley->isGrainCrop());
        $this->assertTrue($barley->isOilseed());
        $this->assertEquals(3.0, $barley->getTrashPercentageNorm());
        $this->assertEquals(8.0, $barley->getHumidityPercentageNorm());
    }
} 
