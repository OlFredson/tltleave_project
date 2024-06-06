<?php

namespace App\Core;

use PDO;

class Database extends PDO
{
    // Propriétés de la classe Database
    private $dsn;
    private $username;
    private $password;
    private $options;

    // Constructeur de la classe Database
    public function __construct()
    {
        // Définition des informations de connexion à la base de données
        $dsn = "mysql:host=localhost;dbname=tltleavedb;charset=utf8;port=3307";
        $username = "tlt_user";
        $password = "tlt_password";
        $options = [];

        // Appel du constructeur de la classe parente (PDO) avec les paramètres de connexion
        parent::__construct($dsn, $username, $password, $options);
    }
}
