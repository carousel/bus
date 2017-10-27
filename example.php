<?php
require "vendor/autoload.php";

use Carousel\Bus;
use Carousel\ClassNameExtractor;

class LoginCommandHandler
{
    public function login($request)
    {
        if ($request == 42) {
            echo "You are now logged in!" . PHP_EOL;
        } else {
            echo "You don't have permission to log in!" . PHP_EOL;
        }
    }
}

abstract class Login
{
    /**
    *
    */
    public function __construct()
    {
        $this->handler = new LoginCommandHandler;
    }

    abstract public function execute($request);
}

class LoginCommand extends Login
{
    public function execute($request)
    {
        $this->handler->login($request);
    }
}

$userId = 42;
$bus = new Bus(new ClassNameExtractor);
$bus->handle($userId, new LoginCommand, '');
