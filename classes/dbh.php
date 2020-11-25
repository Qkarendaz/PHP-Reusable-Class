<?php

class Dbh {
    private $hostname = "localhost"; //Host addess goes here
    private $username = "root"; //Host address username goes here
    private $password = ""; //Host adress password goes here
    private $dbname = "newdb"; //database name goes here

    protected function conn(){
        $dsn = "mysql:host=$this->hostname;dbname=$this->dbname";
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
