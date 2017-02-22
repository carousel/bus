<?php
namespace Tests;

class Command extends BaseCommand
{
    /**
    * Instantiate handler
    */
    public function __construct()
    {
        $this->handler = new CommandHandler;
    }
    
    /**
    * Execute command on handler
    *
    * @param request
    */
    public function execute($request)
    {
        $this->handler->doSomething($request);
    }
}
