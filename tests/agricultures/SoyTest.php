<?php

namespace richweber\duval\calculator\tests\agricultures;

use richweber\duval\calculator\agricultures\oil\Soy;

class SoyTest extends \PHPUnit_Framework_TestCase
{
    public function testSoy()
    {
        $barley = new Soy();
        $this->assertFalse($barley->isGrainCrop());
        $this->assertTrue($barley->isOilseed());
        $this->assertEquals(2.0, $barley->getTrashPercentageNorm());
        $this->assertEquals(12.0, $barley->getHumidityPercentageNorm());
    }
} 
