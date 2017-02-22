<?php
namespace Tests;

use Carousel\Bus;
use Carousel\BusInterface;
use Tests\Command;
use Tests\CommandHandler;

class ExampleTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Set up bus instance
    */
    public function setUp()
    {
        $this->command = new Command(new CommandHandler);
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
    /**
     * Test that command is executed via bus
     *
     * @test
     */
    public function commandIsExecutedAndDispatchedToHandler()
    {
        $filename = 'filename.txt';
        $this->bus->handle($filename, $this->command);
        $this->assertTrue(file_exists($filename));
        unlink($filename);
        $this->assertNotTrue(file_exists($filename));
    }
}
