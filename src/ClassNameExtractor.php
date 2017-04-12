<?php
namespace Carousel;

class ClassNameExtractor
{
    /**
    * Extract class name from instance
    *
    * @param command instance
    */
    public function extract($command, $namespace = null)
    {
        if ($namespace != null) {
            $className = (new \ReflectionClass($command))->getShortName();
            $realClassName = $namespace . '\\' . $className;
            return $realClassName;
        } else {
            $className = (new \ReflectionClass($command))->getShortName();
            return $className;
        }
    }
}
