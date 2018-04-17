<?php

namespace app\core;

class View {

    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
    }

    public function render($title, $vars = []) {
        extract($vars);
        $path = 'app/views/'.$this->path.'.php';
        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'app/views/main/'.$this->layout.'.php';
        }
        else{
            echo 'no found'.$this->path;
        }
    }

    public function message($status, $message) {
        exit(json_encode(['status' => $status, 'message' => $message]));
    }
    public function location($url) {
        exit(json_encode(['url' => $url]));
    }
}
