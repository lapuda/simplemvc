<?php

use controller\ControllerFactory;
use http\Request;
use http\Response;

class Core {

    protected static $instance;
    private function __construct() {}

    /**
     * 实例化.
     * @return static
     */
    public static function instance() {
        if (null == self::$instance) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    /**
     * run.
     * @param $cgiName
     */
    public function run($defaultCgi = 'Default') {
        $cgiName = $this->parseName($defaultCgi);
        $cgiClass = $cgiName != 'Default' ? "\controller\\".$cgiName : "\controll\\WellCome";
        ControllerFactory::CreateWithClassName($cgiClass)->doRun();
    }

    /**
     * 解析CGI的名字.
     *
     * @return string
     */
    public function parseName($default = 'Default') {
        if (!isset($_SERVER['REQUEST_URI'])) {
            return $default;
        }
        $requstParams = parse_url(str_replace('//','/',$_SERVER['REQUEST_URI']));
        $routes       = explode('/',ltrim($requstParams['path'],'/'));
        if (count($routes) > 0 && !empty($routes[0])) {
            if (count($routes) == 2) {
                return $routes[0].'\\'.$routes[1];
            }
            if (count($routes) == 3) {
                return $routes[0].'\\'.$routes[1].'\\'.$routes[2];
            }
            return ucfirst($routes[0]);
        } else {
            return $default;
        }
    }
} 