<?php
require "vendor/autoload.php";

use Carousel\Bus;
use Carousel\ClassNameExtractor;

class LoginCommandHandler
{
    public function login($request)
    {
        if ($request == 42) {
            echo "You are now logged in!";
        } else {
            echo "You don't have permission to log in!";
        }
    }
}

class LoginCommand
{
    public function execute($request, $handler)
    {
        $handler->login($request);
    }
}

$user_id = 42;
$bus = new Bus(new ClassNameExtractor);
$bus->handle($user_id, new LoginCommand);
