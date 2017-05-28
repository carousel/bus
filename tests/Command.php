<?php

namespace Test;

class Command
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
