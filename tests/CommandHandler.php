<?php
namespace Tests;

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
