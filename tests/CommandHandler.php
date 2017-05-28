<?php

namespace Test;

class CommandHandler
{
    /**
    * Action on handler (business logic)
    */
    public function doSomething($request)
    {
        $contents = 'some file contents';
        file_put_contents($request, $contents);
    }
}
