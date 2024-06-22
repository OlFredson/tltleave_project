<?php

namespace App\Core;

use PDO;

class Database extends PDO {

    public function __construct() {

        $config = include __DIR__ . '/../../Config/config.php';
        $dsn = $config['database']['dsn'];
        $username = $config['database']['username'];
        $password = $config['database']['password'];
        $options = $config['database']['options'];

        parent::__construct($dsn, $username, $password, $options);
    }
}
