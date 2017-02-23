<?php
namespace Tests;

abstract class BaseCommand
{
    abstract public function execute($request,$handler);
}
