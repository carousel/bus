<?php 

use Carousel\Bus;
use Carousel\ClassNameExtractor;
use Carousel\BusInterface;

abstract class WriteToFile
{
    /**
    *
    */
    public function __construct()
    {
        $this->handler = new WriteToFileCommandHandler;
    }

    abstract public function execute($request);
}
    

class WriteToFileCommand extends WriteToFile
{
    
    /**
    * Execute command on handler
    *
    * @param request
    */
    public function execute($request)
    {
        $this->handler->writeToFile($request);
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
        $this->command = new WriteToFileCommand();
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
        //$this->assertTrue($this->bus instanceof BusInterface);
    }

    /**
     * Test that command is executed via bus
     *
     * @test
     */
    public function commandIsExecutedAndDispatchedToHandler()
    {
        //$this->request['file'] = 'filename.txt';
        //$this->bus->handle($this->request, $this->command, 'Test');
        //$this->assertTrue(file_exists($this->request['file']));
        //unlink($this->request['file']);
        //$this->assertNotTrue(file_exists($this->request['file']));
    }
}
