<?php

namespace app\core;

use app\core\DataBase;
require 'app\core\Db.php';

abstract class Model
{
    public $db;

    public function __construct()
    {
        $this->db = new DataBase();

    }


}