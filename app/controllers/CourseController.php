<?php
require_once __DIR__ . "/../config/database.php";


abstract class Cours
{
    protected $id;
    protected $titre;
    protected $description;
    protected $slgan;
    protected $categorie_id;
    protected $Tags_id;
    protected $Type = null;
    protected $connect;
    protected $image;

    public function __construct()
    {
        $this->connect = Database::getInstance()->getConnection();
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getSlgun()
    {
        return $this->slgan;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->Type;
    }

    public function getImage(){
        return $this->image;
    }

    public function setcategorie_id($categorie_id)
    {
        $this->categorie_id = $categorie_id;
    }

    public function setid($id)
    {
        $this->id = $id;
    }

    public function setTags_id($Tags_id)
    {
        $this->Tags_id= $Tags_id;
    }


    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

  
    public function setSlgun($slgan)
    {
        $this->slgan = $slgan;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setType($Type)
    {
        $this->Type = $Type;
    }
    public function setImage($image){
        $this->image = $image;
    }

    abstract public function ajouterCours();

    abstract public function afficherCours();

    public function deletCours(){
        $sql = "DELETE FROM cours WHERE id = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }
   
}


