<?php
namespace Carousel;

class ClassNameExtractor
{
    /**
    * Extract class name from instance
    *
    * @param command instance
    */
    public function extract($command)
    {
        $className = get_class($command);
        $className = str_replace('Commands','Handlers',$className);
        return $className;
    }
}
