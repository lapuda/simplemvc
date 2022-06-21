<?php

namespace controller;

use http\Request;
use http\Response;

/**
 * ControllerFactory class
 */
class ControllerFactory {

    /**
     * Undocumented function
     *
     * @param string $className
     * @return Controller
     */
    public static function CreateWithClassName(string $className) : Controller {
        if (!class_exists($className)) {
            $className = NotFound::class;
        }
        $refClass = new \ReflectionClass($className);
        $controller = $refClass->newInstance();

        self::setValueForNotAccessibleProperty($controller,$refClass->getProperty("request"),new Request());
        self::setValueForNotAccessibleProperty($controller,$refClass->getProperty("response"),new Response());
        return $controller;
    }

    /**
     * Undocumented function
     *
     * @param [type] $obj
     * @param [type] $property
     * @param [type] $value
     * @return void
     */
    private static function setValueForNotAccessibleProperty($obj,$property,$value) {
        $property->setAccessible(true);
        $property->setValue($obj,$value);
        $property->setAccessible(false);
    }

}