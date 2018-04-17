<?php

namespace app\core;

use Exception;

class DataBase
{
    protected $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect('localhost', 'root', '','test');

        if (!$this->connection) {
            throw new Exception('Could not connect to DB ');

        }

    }

}
