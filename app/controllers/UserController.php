<?php

namespace app\controllers;

use Slim\Psr7\Request;
use Slim\Psr7\Response;

class UserController{
    public function show(Request $request, Response $response, array $args){
        dd($args['id']);
    }
}