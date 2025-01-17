<?php

class Database
{
    private $localHost = 'localhost';
    private $name = 'root';
    private $password = '';
    private $dbname = 'udemy';
    private $connect;

    private static $instance = null;
    private function __construct()
{
    try {
        $dns = "mysql:host={$this->localHost};dbname={$this->dbname};charset=utf8";
        $this->connect = new PDO($dns, $this->name, $this->password);
        $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Erreur de connexion : ' . $e->getMessage();
    }
}

}