<?php 

require_once __DIR__."/../controllers/CourseController.php";


class CoursVideo extends Cours
{
    private $contenu_video;


    public function __construct()
    {
        parent::__construct();
    }

    public function getVideo()
    {
        return $this->contenu_video;
    }

    public function setVideo($contenu_video)
    {
        $this->contenu_video = $contenu_video;
    }

    public function ajouterCours()
{
    try {
        // Vérifier si un fichier d'image est fourni
        if (isset($this->image['tmp_name']) && $this->image['tmp_name'] != '') {
            // Dossier de destination
            $uploadDir = '../views/assets/img/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true); // Créer le dossier s'il n'existe pas
            }

            // Générer un nom unique pour l'image
            $imageName = uniqid() . '_' . basename($this->image['name']);
            $uploadPath = $uploadDir . $imageName;

            // Déplacer l'image téléchargée dans le dossier cible
            if (!move_uploaded_file($this->image['tmp_name'], $uploadPath)) {
                throw new Exception("Échec de l'upload de l'image.");
            }

            echo "Image uploadée avec succès : {$uploadPath}<br>";
        } else {
            throw new Exception("Aucune image valide fournie.");
        }

        // Ajouter le cours à la base de données
        $sql = "INSERT INTO cours (titre, description, Slgan, Type, Enseignant_id, contenu, categorie_id, image) 
                VALUES (:titre, :description, :Slgan, 'video', :idE, :contenu, :categorie, :image)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':titre', $this->titre, PDO::PARAM_STR);
        $stmt->bindParam(':description', $this->description, PDO::PARAM_STR);
        $stmt->bindParam(':Slgan', $this->slgan, PDO::PARAM_STR);
        $stmt->bindParam(':idE', $this->id, PDO::PARAM_INT);
        $stmt->bindParam(':contenu', $this->contenu_video, PDO::PARAM_STR);
        $stmt->bindParam(':categorie', $this->categorie_id, PDO::PARAM_INT);
        $stmt->bindParam(':image', $uploadPath, PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo 'Cours inséré avec succès.<br>';
        } else {
            echo 'Échec de l\'insertion du cours.<br>';
            return false;
        }

        // Gestion des tags
        $coursID = $this->connect->lastInsertId();
        if (!$coursID) {
            throw new Exception("Impossible de récupérer l'ID du dernier cours inséré.");
        }

        if (is_array($this->Tags_id)) {
            foreach ($this->Tags_id as $tag) {
                $sql = "INSERT INTO courstag (idCours, idTag) VALUES (:idCours, :idTag)";
                $stmt = $this->connect->prepare($sql);
                $stmt->bindParam(':idCours', $coursID, PDO::PARAM_INT);
                $stmt->bindParam(':idTag', $tag, PDO::PARAM_INT);

                if ($stmt->execute()) {
                    echo "Tag {$tag} lié au cours {$coursID}.<br>";
                } else {
                    echo "Échec de l'association du tag {$tag} au cours {$coursID}.<br>";
                }
            }
        } else {
            throw new Exception("Les tags doivent être un tableau.");
        }

        return true;
    } catch (PDOException $e) {
        echo "Erreur de base de données : " . $e->getMessage();
        return false;
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
        return false;
    }
}



    public function afficherCours() {
        try {
            
            if ($this->id == null) {
                $sql = "SELECT 
                            C.*, 
                            U.nom AS enseignant_nom, 
                            U.prenom AS enseignant_prenom, 
                            GROUP_CONCAT(tg.nom_Tag SEPARATOR ', ') AS tags
                        FROM cours AS C
                        JOIN utilisateur AS U ON U.id = C.Enseignant_id
                        LEFT JOIN courstag AS T ON T.idCours = C.id
                        LEFT JOIN tag AS TG ON TG.id_Tag = T.idTag
                        GROUP BY C.id";
    
                $stmt = $this->connect->prepare($sql);
                $stmt->execute();
                $Cours = $stmt->fetchAll(PDO::FETCH_ASSOC);
               
                return $Cours;
            } else {
                
                $sql = "SELECT 
                C.*, 
                U.nom AS enseignant_nom, 
                U.prenom AS enseignant_prenom,
                GROUP_CONCAT(TG.nom_Tag SEPARATOR ', ') AS tags,
                GROUP_CONCAT(TG.color SEPARATOR ', ') AS couleurs
            FROM cours AS C
            JOIN utilisateur AS U ON U.id = C.Enseignant_id
            LEFT JOIN courstag AS T ON T.idCours = C.id
            LEFT JOIN tag AS TG ON TG.id_Tag = T.idTag
            WHERE U.id = :id AND C.type = 'Video'
            GROUP BY C.id";

           

    $stmt = $this->connect->prepare($sql);
    $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
    $stmt->execute();
    $cours = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $cours;
            }
        } catch (PDOException $e) {
            echo "Erreur de base de données : " . $e->getMessage();
            return false;
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }
    public function deletCours(){
        $sql = "DELETE FROM cours WHERE id = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function modiferCours($id){
        $sql = "SELECT * FROM cours where id = :id and Type = 'video'";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $resutl = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resutl;

    }


    public function Modifer($id) {
        try {
            // Initialisation de l'ID du cours
            $coursID = $id;
    
            // Vérification et upload de l'image
            $uploadPath = null;
            if (isset($this->image['tmp_name']) && $this->image['tmp_name'] != '') {
                $uploadDir = '../views/assets/img/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
    
                // Générer un nom unique pour l'image
                $imageName = uniqid() . '_' . basename($this->image['name']);
                $uploadPath = $uploadDir . $imageName;
    
                if (!move_uploaded_file($this->image['tmp_name'], $uploadPath)) {
                    throw new Exception("Échec de l'upload de l'image.");
                }
            }
    
            // Mise à jour des informations du cours
            $sql = "UPDATE cours 
                    SET titre = :titre, 
                        description = :description, 
                        Slgan = :Slgan, 
                        Type = 'Video', 
                        Enseignant_id = :idE, 
                        contenu = :contenu, 
                        categorie_id = :categorie, 
                        image = :image
                    WHERE id = :id";
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(':titre', $this->titre, PDO::PARAM_STR);
            $stmt->bindParam(':description', $this->description, PDO::PARAM_STR);
            $stmt->bindParam(':Slgan', $this->slgan, PDO::PARAM_STR);
            $stmt->bindParam(':idE', $this->id, PDO::PARAM_INT);
            $stmt->bindParam(':contenu', $this->contenu_video, PDO::PARAM_STR);
            $stmt->bindParam(':categorie', $this->categorie_id, PDO::PARAM_INT);
            $stmt->bindParam(':image', $uploadPath, PDO::PARAM_STR);
            $stmt->bindParam(':id', $coursID, PDO::PARAM_INT);
    
            if (!$stmt->execute()) {
                throw new Exception("Échec de la mise à jour du cours.");
            }
    
            // Suppression des anciens tags associés au cours
            $deleteTagsSql = "DELETE FROM courstag WHERE idCours = :idCours";
            $deleteStmt = $this->connect->prepare($deleteTagsSql);
            $deleteStmt->bindParam(':idCours', $coursID, PDO::PARAM_INT);
            $deleteStmt->execute();
    
            // Ajout des nouveaux tags
            if (is_array($this->Tags_id)) {
                $insertTagSql = "INSERT INTO courstag (idCours, idTag) VALUES (:idCours, :idTag)";
                $tagStmt = $this->connect->prepare($insertTagSql);
    
                foreach ($this->Tags_id as $tag) {
                    $tagStmt->bindParam(':idCours', $coursID, PDO::PARAM_INT);
                    $tagStmt->bindParam(':idTag', $tag, PDO::PARAM_INT);
    
                    if (!$tagStmt->execute()) {
                        throw new Exception("Échec de l'association du tag {$tag} au cours {$coursID}.");

                    }
                }
            } else {
                throw new Exception("Les tags doivent être un tableau.");
            }
    
            echo "Cours et tags mis à jour avec succès.<br>";
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage() . "<br>";
        }
        header("Location: ../courses/instructor-course.php");
                exit;
           
    }
    
}
    






