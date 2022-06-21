<?php

namespace controller;

use http\Response;

class NotFound extends Controller {

    public function run() {
        $this->response->outputJson(Response::HTTP_NOT_FOUND,Response::$statusTexts[Response::HTTP_NOT_FOUND]);
    }
      
}