<?php

namespace richweber\duval\calculator\tests\calculator;

use richweber\duval\calculator\agricultures\grain\Barley;
use richweber\duval\calculator\agricultures\grain\Corn;
use richweber\duval\calculator\agricultures\grain\Pea;
use richweber\duval\calculator\agricultures\grain\Wheat;
use richweber\duval\calculator\agricultures\oil\Colza;
use richweber\duval\calculator\agricultures\oil\Soy;
use richweber\duval\calculator\agricultures\oil\Sunflower;
use richweber\duval\calculator\agricultures\OtherCulture;
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

        $this->assertEquals(6.8182, $calculator->getHumidityCoefficient());
        $this->assertEquals(0, $calculator->getTrashCoefficient());
    }

    public function testWheat()
    {
        $calculator = new Calculator(new Wheat(), new GrainQuality(15.8, 4.7), 10000);
        $this->assertEquals(10000, $calculator->getStartWeight());
        $this->assertEquals(479.04, $calculator->getLostWeight());
        $this->assertEquals(9520.96, $calculator->getFinishWeight());

        $this->assertEquals(2.093, $calculator->getHumidityCoefficient());
        $this->assertEquals(2.6974, $calculator->getTrashCoefficient());
    }

    public function testBarley()
    {
        $calculator = new Calculator(new Barley(), new GrainQuality(15.8, 4.7), 10000);
        $this->assertEquals(10000, $calculator->getStartWeight());
        $this->assertEquals(479.04, $calculator->getLostWeight());
        $this->assertEquals(9520.96, $calculator->getFinishWeight());

        $this->assertEquals(2.093, $calculator->getHumidityCoefficient());
        $this->assertEquals(2.6974, $calculator->getTrashCoefficient());
    }

    public function testCorn()
    {
        $calculator = new Calculator(new Corn(), new GrainQuality(15.8, 4.7), 10000);
        $this->assertEquals(10000, $calculator->getStartWeight());
        $this->assertEquals(479.04, $calculator->getLostWeight());
        $this->assertEquals(9520.96, $calculator->getFinishWeight());

        $this->assertEquals(2.093, $calculator->getHumidityCoefficient());
        $this->assertEquals(2.6974, $calculator->getTrashCoefficient());
    }

    public function testPea()
    {
        $calculator = new Calculator(new Pea(), new GrainQuality(15.8, 4.7), 10000);
        $this->assertEquals(10000, $calculator->getStartWeight());
        $this->assertEquals(479.04, $calculator->getLostWeight());
        $this->assertEquals(9520.96, $calculator->getFinishWeight());

        $this->assertEquals(2.093, $calculator->getHumidityCoefficient());
        $this->assertEquals(2.6974, $calculator->getTrashCoefficient());
    }

    public function testColza()
    {
        $calculator = new Calculator(new Colza(), new GrainQuality(15.8, 4.7), 10000);
        $this->assertEquals(10000, $calculator->getStartWeight());
        $this->assertEquals(1099.98, $calculator->getLostWeight());
        $this->assertEquals(8900.02, $calculator->getFinishWeight());

        $this->assertEquals(8.4783, $calculator->getHumidityCoefficient());
        $this->assertEquals(2.5215, $calculator->getTrashCoefficient());
    }

    public function testSunflower()
    {
        $calculator = new Calculator(new Sunflower(), new GrainQuality(15.8, 4.7), 10000);
        $this->assertEquals(10000, $calculator->getStartWeight());
        $this->assertEquals(1008.23, $calculator->getLostWeight());
        $this->assertEquals(8991.77, $calculator->getFinishWeight());

        $this->assertEquals(8.4783, $calculator->getHumidityCoefficient());
        $this->assertEquals(1.604, $calculator->getTrashCoefficient());
    }

    public function testSunflowerCustom()
    {
        $calculator = new Calculator(new Sunflower(7, 2), new GrainQuality(15.8, 4.7), 10000);
        $this->assertEquals(10000, $calculator->getStartWeight());
        $this->assertEquals(1195.68, $calculator->getLostWeight());
        $this->assertEquals(8804.32, $calculator->getFinishWeight());

        $this->assertEquals(9.4624, $calculator->getHumidityCoefficient());
        $this->assertEquals(2.4944, $calculator->getTrashCoefficient());
    }

    public function testOtherCulture()
    {
        $calculator = new Calculator(new OtherCulture(), new GrainQuality(15.8, 4.7), 10000);
        $this->assertEquals(10000, $calculator->getStartWeight());
        $this->assertEquals(1974.14, $calculator->getLostWeight());
        $this->assertEquals(8025.86, $calculator->getFinishWeight());

        $this->assertEquals(15.7916, $calculator->getHumidityCoefficient());
        $this->assertEquals(3.9498, $calculator->getTrashCoefficient());
    }

    public function testGetLostWeightByHumidity()
    {
        $calculator = new Calculator(new Soy(), new GrainQuality(13, 2), 10000);
        $this->assertEquals(113.64, $calculator->getLostWeightByHumidity());
        $this->assertEquals(0, $calculator->getLostWeightByTrash());
    }

    public function testGetLostWeightByTrash()
    {
        $calculator = new Calculator(new Soy(), new GrainQuality(12, 3), 10000);
        $this->assertEquals(102.04, $calculator->getLostWeightByTrash());
        $this->assertEquals(0, $calculator->getLostWeightByHumidity());
    }

    public function testGetLostWeightByParams()
    {
        $calculator = new Calculator(new Soy(), new GrainQuality(13, 3), 10000);
        $this->assertEquals(100.88, $calculator->getLostWeightByTrash());
        $this->assertEquals(113.64, $calculator->getLostWeightByHumidity());

        $total = round($calculator->getLostWeightByTrash() + $calculator->getLostWeightByHumidity(), 2);
        $this->assertEquals(214.52, $calculator->getLostWeight());
        $this->assertEquals($total, $calculator->getLostWeight());
    }
} 
