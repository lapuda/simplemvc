<?php

namespace controller;

use http\Response;

class WellCome extends Controller {
  
    public function run() {
        $this->response->outputJson(Response::HTTP_OK,Response::$statusTexts[Response::HTTP_OK]);
    }

}