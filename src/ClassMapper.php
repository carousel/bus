<?php

namespace Carousel;

class ClassMapper
{
    /**
    * Map command name to handler
    *
    * @param command instance
    */
    public function getHandler($command)
    {
        $class = get_class($command);
        return $class . 'Handler';
    }
}
