<?php

namespace Carousel\Bus;

interface BusInterface
{
    /**
     * Forward incoming request
     * Map command to handler
    *
    * @param request
    * @param command
    *
    * @return void
    */
    public function handle($request, $command);
}
