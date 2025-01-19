<?php
require_once __DIR__ . "/../config/database.php";

class Categorie
{
    private int $id;             
    private string $nomCategorie; 
    private string $slogan;       
    private PDO $connect;        

    public function __construct( $id = null, $nomCategorie = null, $slogan = null)
    {
        $this->id = $id ?? 0;
        $this->nomCategorie = $nomCategorie ?? "";
        $this->slogan = $slogan ?? "";
        $this->connect = Database::getInstance()->getConnection();
    }
}
