<?php

namespace app\controllers;

use app\core\Controller;

class ErrorController extends Controller{


    public static function errorCode($code){

        http_response_code($code);
        $path = 'app/views/errors/'.$code.'.php';
        if(file_exists($path)){
            require $path;
        }
        exit;
    }
}