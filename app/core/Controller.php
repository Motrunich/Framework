<?php

namespace app\core;
use app\controllers\ErrorController;
use app\core\View;
use app\models;

abstract class Controller {

    public $route;
    public $view;
    public $admittance;


    public function __construct($route)
    {
        $this->route = $route;
        $this->checkAdmittance
        ();
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);

    }

    public function loadModel($name)
    {
        $path = 'app\models\\'.ucfirst($name) . 'Model';
        if(class_exists($path)){
            return new $path;

        }
    }

    public function checkAdmittance(){
        $this->admittance = require 'app/config/'.$this->route['controller'].'.php';
        if($this->isAdmittance('all')){
            return true;
        }
        return false;
    }
public function isAdmittance($key){
        return in_array($this->route['action'], $this->admittance[$key]);
}}
