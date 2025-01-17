<?php
session_start();
require_once __DIR__ . "/../config/database.php";

class Person
{
    protected $email;
    protected $password;
    protected $connect;

    public function __construct()
    {
        $this->connect = Database::getInstance()->getConnection();
    }

    public function setEmail($email)
    {
        $this->email = htmlspecialchars($email);
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function loginUser($email, $password)
    {
        $this->setEmail($email);
    
        $stmt = $this->connect->prepare("SELECT * FROM utilisateur WHERE email = :email");
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->execute();
    
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($user) {
           
            if (password_verify($password, $user['motDePasse'])) {
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["user_name"] = $user["nom"];
                $_SESSION["user_role"] = $user["role_id"];
                $_SESSION["user_profile"] = $user["Image"];

                if ($user["role_id"] == 2) {
                    if ($user['Action'] == 1) {
                        echo "<script>alert('le compte pas aprove');</script>";
                    }elseif($user['Action'] == 0){
                    header("Location: ../courses/instructor-course.php");
                    }
                } elseif ($user["role_id"] == 3) {
                    header("Location: ../admin/Users.php");
                }
                elseif ($user["role_id"] == 1) {
                    header("Location: ../views/Etudiant/Courses.php");
                }
                exit;
            } else {
                echo "<script>alert('Email ou mot de passe invalide.');</script>";
            }
        } else {
            echo "<script>alert('Aucun utilisateur trouvé avec cet email ou cet email est bloqué.');</script>";
        }
    }
    
}
