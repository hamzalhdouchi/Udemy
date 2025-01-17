<?php
require_once __DIR__ . "/../config/database.php";

class Categorie
{
    private $connect;
    private $nomCategorie;
    private $Slgan;

    public function __construct()
    {
        $this->connect = Database::getInstance()->getConnection();
    }

    public function getNomCategorie()
    {
        return $this->nomCategorie;
    }

    public function setNomCategorie($nomCategorie)
    {
        $this->nomCategorie = htmlspecialchars($nomCategorie);
    }

    public function getSlogan()
    {
        return $this->Slgan;
    }

    public function setSlogan($Slgan)
    {
        $this->Slgan = $Slgan;
    }

    public function getCategories()
    {
        $sql = "SELECT * FROM categorie";
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function ajoutCategorie($idCont, $postdata)
    {
        $sql = "INSERT INTO categorie(nom_categorei, slgan) VALUES (:name, :Slgan)";
        var_dump($idCont);
        for ($i = 0; $i <= $idCont; $i++) {
            $name = $postdata["categorie_name_$i"];
            $Slgan = $postdata["categorie_Slgan_$i"];;

            $this->setNomCategorie($name);
            $this->setSlogan($Slgan);
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(':name', $this->nomCategorie, PDO::PARAM_STR);
            $stmt->bindParam(':Slgan', $this->Slgan, PDO::PARAM_STR);
            $stmt->execute();
        }
    }

    public function deleteCategorie($id)
    {
        try {
            $sql = "DELETE FROM categorie WHERE id_categorei = :id";
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            header("Location: ../admin/instructor-my-quiz-attempts.PHP");
            exit;
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function getModifier($id)
    {
        $sql = "SELECT * FROM categorie WHERE id_categorei = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($id, $nom, $slgan)
    {
        $sql = "UPDATE categorie SET id_categorei = :nom, Slgan = :slgan WHERE id_categorei = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':slgan', $slgan, PDO::PARAM_STR);
        $stmt->execute();
        header("Location: ../admin/instructor-my-quiz-attempts.PHP");
        exit;
    }
}
