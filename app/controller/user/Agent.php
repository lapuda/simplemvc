<?php

namespace controller\user;

use controller\Controller;
use http\Response;

class Agent extends Controller {
   
    function run() {
        $this->response->outputJson(Response::HTTP_OK,$this->request->getUserAgent());
    }
}