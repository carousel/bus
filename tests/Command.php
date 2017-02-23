<?php
namespace Tests;

class Command extends BaseCommand
{
    
    /**
    * Execute command on handler
    *
    * @param request
    */
    public function execute($request,$handler)
    {
        $handler->doSomething($request);
    }
}
