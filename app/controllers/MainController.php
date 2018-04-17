<?php

namespace app\controllers;

use app\core\Controller;


class MainController extends Controller
{
    public function indexAction()
        {
//            $result = $this->model-> getBase();
//            $vars = [
//                'name' => $result,
//            ];
            $this->view->render('Главная страница');
        }
}