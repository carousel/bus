<?php

namespace Carousel;

use Carousel\BusInterface;
use Carousel\ClassMapper;

class Bus implements BusInterface
{
    public $classNameExtractor;

    /**
     * Inject class name extractor
     *
     * $param extractor
     */
    public function __construct()
    {
        $this->classMapper = new ClassMapper;
    }

    /**
     * Main handle method will connect command and handler (in its simplest implementationj)
     *
     * @param request
     * @param command
     *
     * @return void
     */
    public function handle($request, $command)
    {
        $className = $this->classMapper->getHandler($command);
        $handler = new $className;
        $command->execute($request, $handler);
    }
}
