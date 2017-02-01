<?php

namespace richweber\duval\calculator\tests\agricultures;

use richweber\duval\calculator\agricultures\oil\Colza;

class ColzaTest extends \PHPUnit_Framework_TestCase
{
    public function testColza()
    {
        $barley = new Colza();
        $this->assertFalse($barley->isGrainCrop());
        $this->assertTrue($barley->isOilseed());
        $this->assertEquals(2.0, $barley->getTrashPercentageNorm());
        $this->assertEquals(8.0, $barley->getHumidityPercentageNorm());
    }
} 
