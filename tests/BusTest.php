<?php

use Carousel\Bus;
use Carousel\BusInterface;

class ExampleTest extends \PHPUnit_Framework_TestCase
{
    /**
    * 
    *
    * @
    */
    public function setUp()
    {
        $this->bus = new Bus;
    }
    /**
     * Test that bus implements bus interface
     *
     * @test
     */
    public function busImplementsInterface()
    {
        $this->assertTrue($this->bus instanceof BusInterface);
    }
}
