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
<<<<<<< HEAD
    public function handle($request, $command, $location = null)
||||||| merged common ancestors
    public function handle($request, $command)
=======
    public function handle($request, $command, $namespace = null)
>>>>>>> cccaa6dbb0c3b3aa7233b413d6cc93860fbf03c6
    {
<<<<<<< HEAD
        if ($namespace != null) {
            $className = $this->classNameExtractor->extract($command, $namespace) . 'Handler';
            $handler = new $className;
            $command->execute($request, $handler)        ;
        }else{
            $className = $this->classNameExtractor->extract($command) . 'Handler';
            $handler = new $className;
            $command->execute($request, $handler)
        }        ;
||||||| merged common ancestors
        $className = $this->classNameExtractor->extract($command) . 'Handler';
        $handler = new $className;
        $command->execute($request, $handler)        ;
=======
        if ($namespace != null) {
            $className = $this->classNameExtractor->extract($command, $namespace) . 'Handler';
            $handler = new $className;
            $command->execute($request, $handler)        ;
        }
        $className = $this->classNameExtractor->extract($command) . 'Handler';
        $handler = new $className;
        $command->execute($request, $handler)        ;
>>>>>>> cccaa6dbb0c3b3aa7233b413d6cc93860fbf03c6
    }
}
