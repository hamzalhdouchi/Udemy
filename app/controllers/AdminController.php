<?php
require_once __DIR__."/../controllers/AuthController.php";

class Admin extends Person {
    private $role;
    public function __construct($role = 1)
{
    parent::__construct();
    $this->role = $role;
}
public function deletuser($id){
    $query = "DELETE FROM utilisateurs WHERE id = :id";
    $stmt = $this->connect->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    if ($stmt->execute()) {
        return "Utilisateur supprimé avec succès !";
    }
}

}
