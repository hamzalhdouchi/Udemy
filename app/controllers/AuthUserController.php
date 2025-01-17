<?php
require_once __DIR__ . "/../config/database.php";
require_once __DIR__ . "/../controllers/AuthController.php";

class User extends Person
{
    private $name;
    private $username;
    private $image;
    public function __construct()
    {
        parent::__construct();
    }

    public function setName($name)
    {
        $this->name = htmlspecialchars($name);
    }

    public function setUsername($username)
    {
        $this->username = htmlspecialchars($username);
    }



    public function setUserImage($image)
    {
        $this->image = $image;
    }

    public function getUserImage()
    {
        return $this->image;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function readUser()
    {
        $sql = "SELECT * FROM utilisateur 
        JOIN role ON utilisateur.role_id = role.id_role
        WHERE role_id != 3";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function GetEnseignant()
    {
        $sql = "SELECT * FROM utilisateur 
            WHERE role_id = 2";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function Aprove($id)
    {
        $sql = "UPDATE utilisateur set Action = 0 WHERE id = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->execute();
        header("Location: ../admin/ActionAdmin.PHP");
        exit;
    }

    public function setUser($name, $username, $email, $password, $image, $role)
    {
        $this->setName($name);
        $this->setUsername($username);
        $this->setEmail($email);
    
        if ($role == 2) {
            if (isset($image) && $image['error'] === 0) {
    

                $targetDir = "../views/assets/img/";
                $targetFile = $targetDir . basename($image["name"]);
        
                if (!is_dir($targetDir)) {
                    mkdir($targetDir, 0755, true);
                }
                if (move_uploaded_file($image["tmp_name"], $targetFile)) {
                    $this->setUserImage(basename($image["name"])); 
                    $this->setPassword(password_hash($password, PASSWORD_DEFAULT)); 
                    $stmt = $this->connect->prepare("INSERT INTO utilisateur (nom, prenom, email, motDePasse, role_id, image,Action) 
                    VALUES (:nom, :username, :email, :password, :role_id, :image,1)");
    
                    $stmt->bindParam(':nom', $this->name, PDO::PARAM_STR);
                    $stmt->bindParam(':username', $this->username, PDO::PARAM_STR);
                    $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
                    $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
                    $stmt->bindParam(':role_id', $role, PDO::PARAM_INT);
                    $stmt->bindParam(':image', $this->image, PDO::PARAM_STR);
    
                    if ($stmt->execute()) {
                        echo 'Utilisateur créé avec succès.';
                    } else {
                        echo 'Erreur lors de l\'insertion dans la base de données.';
                    }
                } else {
                    echo 'Erreur lors du téléchargement du fichier.';
                }
            } else {
                echo 'Fichier non valide ou non téléchargé.';
            }
        }else{
            if (isset($image) && $image['error'] === 0) {
    

                $targetDir = "../views/assets/img/";
                $targetFile = $targetDir . basename($image["name"]);
        
                if (!is_dir($targetDir)) {
                    mkdir($targetDir, 0755, true);
                }
                if (move_uploaded_file($image["tmp_name"], $targetFile)) {
                    $this->setUserImage(basename($image["name"])); 
                    $this->setPassword(password_hash($password, PASSWORD_DEFAULT)); 
                    $stmt = $this->connect->prepare("INSERT INTO utilisateur (nom, prenom, email, motDePasse, role_id, image) 
                    VALUES (:nom, :username, :email, :password, :role_id, :image)");
    
                    $stmt->bindParam(':nom', $this->name, PDO::PARAM_STR);
                    $stmt->bindParam(':username', $this->username, PDO::PARAM_STR);
                    $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
                    $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
                    $stmt->bindParam(':role_id', $role, PDO::PARAM_INT);
                    $stmt->bindParam(':image', $this->image, PDO::PARAM_STR);
    
                    if ($stmt->execute()) {
                        echo 'Utilisateur créé avec succès.';
                    } else {
                        echo 'Erreur lors de l\'insertion dans la base de données.';
                    }
                } else {
                    echo 'Erreur lors du téléchargement du fichier.';
                }
            } else {
                echo 'Fichier non valide ou non téléchargé.';
            }
        }
        
    }
    
    

    public function setSTatus($status, $id)
    {
        $sql = "UPDATE utilisateur SET `statut` = :status WHERE id = :id";
        $stmt = $this->connect->prepare($sql);

        $stmt->bindParam(':status', $status, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();
        header("Location: ../admin/Users.PHP");
        exit;
    }


    public function suppriméUser($id){
        $sql = "DELETE FROM utilisateur WHERE id = :id";

        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id' , $id,PDO::PARAM_INT);
        $stmt->execute();
        header("Location: ../admin/Users.PHP");
        exit;
    }
}
