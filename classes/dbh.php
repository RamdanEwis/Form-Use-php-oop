<?php

class dbh
{

    //name the user name
    private $user = 'root';

    private $host = 'localhost';

    //the password 
    private $pwh = '';

    private $dbname = 'oop';

    protected function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $pdo = new PDO($dsn, $this->user, $this->pwh);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}

