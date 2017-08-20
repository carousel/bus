<?php namespace Test;

use Carousel\Bus;
use Carousel\ClassNameExtractor;
use Carousel\BusInterface;

class WriteToFileCommand
{
    
    /**
    * Execute command on handler
    *
    * @param request
    */
    public function execute($request, $handler)
    {
        $handler->writeToFile($request);
    }
}

class WriteToFileCommandHandler
{
    /**
    * Action on handler (business logic)
    */
    public function writeToFile($request)
    {
        $contents = 'some file contents';
        file_put_contents($request['file'], $contents);
    }
}

class ExampleTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Set up bus instance
     */
    public function setUp()
    {
        $this->command = new WriteToFileCommand(new WriteToFileCommandHandler);
        $this->bus = new Bus(new ClassNameExtractor);
        $this->request = [];
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
        $this->request['file'] = 'filename.txt';
        $this->bus->handle($this->request, $this->command, 'Test');
        $this->assertTrue(file_exists($this->request['file']));
        unlink($this->request['file']);
        $this->assertNotTrue(file_exists($this->request['file']));
    }
}
