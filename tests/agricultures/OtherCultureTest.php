<?php

namespace richweber\duval\calculator\tests\agricultures;

use richweber\duval\calculator\agricultures\OtherCulture;

class OtherCultureTest extends \PHPUnit_Framework_TestCase
{
    public function testOtherCulture()
    {
        $barley = new OtherCulture();
        $this->assertFalse($barley->isGrainCrop());
        $this->assertTrue($barley->isOilseed());
        $this->assertEquals(0.01, $barley->getTrashPercentageNorm());
        $this->assertEquals(0.01, $barley->getHumidityPercentageNorm());
    }
} 
