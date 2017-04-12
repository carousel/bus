<?php
namespace Carousel;

use Carousel\BusInterface;
use Carousel\ClassNameExtractor;

class Bus implements BusInterface
{
    public $classNameExtractor;
    /**
    * Inject class name extractor
    *
    * $param extractor
    */
    public function __construct(ClassNameExtractor $classNameExtractor)
    {
        $this->classNameExtractor = $classNameExtractor;
    }
    
    /**
    * Main handle method will connect command and handler (in its simplest implementationj)
    *
    * @param request
    * @param command
    *
    * @return void
    */
    public function handle($request, $command, $namespace = null)
    {
        if ($namespace != null) {
            $className = $this->classNameExtractor->extract($command, $namespace) . 'Handler';
            $handler = new $className;
            $command->execute($request, $handler)        ;
        }
        $className = $this->classNameExtractor->extract($command) . 'Handler';
        $handler = new $className;
        $command->execute($request, $handler)        ;
    }
}
