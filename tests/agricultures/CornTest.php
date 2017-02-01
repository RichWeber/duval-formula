<?php

namespace richweber\duval\calculator\tests\agricultures;

use richweber\duval\calculator\agricultures\grain\Corn;

class CornTest extends \PHPUnit_Framework_TestCase
{
    public function testCorn()
    {
        $barley = new Corn();
        $this->assertTrue($barley->isGrainCrop());
        $this->assertFalse($barley->isOilseed());
        $this->assertEquals(2.0, $barley->getTrashPercentageNorm());
        $this->assertEquals(14.0, $barley->getHumidityPercentageNorm());
    }
} 
