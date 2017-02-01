<?php

namespace richweber\duval\calculator\tests\calculator;

use richweber\duval\calculator\agricultures\grain\Barley;
use richweber\duval\calculator\agricultures\grain\Corn;
use richweber\duval\calculator\agricultures\grain\Pea;
use richweber\duval\calculator\agricultures\grain\Wheat;
use richweber\duval\calculator\agricultures\oil\Colza;
use richweber\duval\calculator\agricultures\oil\Soy;
use richweber\duval\calculator\agricultures\oil\Sunflower;
use richweber\duval\calculator\calculator\Calculator;
use richweber\duval\calculator\calculator\GrainQuality;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testSoy()
    {
        $calculator = new Calculator(new Soy(), new GrainQuality(18, 2), 30000);
        $this->assertEquals(30000, $calculator->getStartWeight());
        $this->assertEquals(2045.46, $calculator->getLostWeight());
        $this->assertEquals(27954.54, $calculator->getFinishWeight());
    }

    public function testWheat()
    {
        $calculator = new Calculator(new Wheat(), new GrainQuality(15.8, 4.7), 10000);
        $this->assertEquals(10000, $calculator->getStartWeight());
        $this->assertEquals(479.04, $calculator->getLostWeight());
        $this->assertEquals(9520.96, $calculator->getFinishWeight());
    }

    public function testBarley()
    {
        $calculator = new Calculator(new Barley(), new GrainQuality(15.8, 4.7), 10000);
        $this->assertEquals(10000, $calculator->getStartWeight());
        $this->assertEquals(479.04, $calculator->getLostWeight());
        $this->assertEquals(9520.96, $calculator->getFinishWeight());
    }

    public function testCorn()
    {
        $calculator = new Calculator(new Corn(), new GrainQuality(15.8, 4.7), 10000);
        $this->assertEquals(10000, $calculator->getStartWeight());
        $this->assertEquals(479.04, $calculator->getLostWeight());
        $this->assertEquals(9520.96, $calculator->getFinishWeight());
    }

    public function testPea()
    {
        $calculator = new Calculator(new Pea(), new GrainQuality(15.8, 4.7), 10000);
        $this->assertEquals(10000, $calculator->getStartWeight());
        $this->assertEquals(479.04, $calculator->getLostWeight());
        $this->assertEquals(9520.96, $calculator->getFinishWeight());
    }

    public function testColza()
    {
        $calculator = new Calculator(new Colza(), new GrainQuality(15.8, 4.7), 10000);
        $this->assertEquals(10000, $calculator->getStartWeight());
        $this->assertEquals(1099.98, $calculator->getLostWeight());
        $this->assertEquals(8900.02, $calculator->getFinishWeight());
    }

    public function testSunflower()
    {
        $calculator = new Calculator(new Sunflower(), new GrainQuality(15.8, 4.7), 10000);
        $this->assertEquals(10000, $calculator->getStartWeight());
        $this->assertEquals(1008.23, $calculator->getLostWeight());
        $this->assertEquals(8991.77, $calculator->getFinishWeight());
    }
} 
