<?php
namespace controller;

use http\Response;
use http\Request;
/**
 * Undocumented class
 */
abstract class Controller {
    
    /**
     * Undocumented variable
     *
     * @var Response
     */
    protected $response;
    /**
     * Undocumented variable
     *
     * @var Request
     */
    protected $request;

    protected function before(){}
    protected function after(){}

    abstract public function run();

    public function doRun() {
        $this->before();
        $this->run();
        $this->after();
    }
} 