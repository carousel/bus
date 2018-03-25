<?php

namespace Carousel\Bus;

use Carousel\Bus\BusInterface;
use Carousel\Bus\ClassMapper;

class Bus implements BusInterface
{
    public $classMapper;

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
