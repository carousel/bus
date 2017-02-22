<?php
namespace Carousel;

use Carousel\BusInterface;

class Bus implements BusInterface
{
    /**
    * Main handle method will connect command and handler (in its simplest implementationj)
    *
    * @param request
    * @param command
    *
    * @return void
    */
    public function handle($request,$command)
    {
        
    }
}
