<?php

namespace App\Core;

use PDO;

class Database extends PDO
{
    private $dsn;
    private $username;
    private $password;
    private $options;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=tltleavedb;charset=utf8;port=3306";
        $username = "tlt_user";
        $password = "tlt_password";
        $options = [];
        parent::__construct($dsn, $username, $password, $options);
    }
}