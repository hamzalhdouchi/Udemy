<?php 

require_once __DIR__."/../controllers/CourseController.php";
require_once __DIR__."/../controllers/TagController.php";

class CoursDocument extends Cours
{
    private $contenu_document;

    public function __construct()
    {
        parent::__construct();
    }

    public function getDocument()
    {
        return $this->contenu_document;
    }

    public function setDocument($contenu_document)
    {
        $this->contenu_document = $contenu_document;
    }


    public function ajouterCours()
{
    try {
        $imagePath = '';
        $documentPath = '';

        // Gestion de l'upload de l'image
        if (isset($this->image) && $this->image['error'] === UPLOAD_ERR_OK) {
            $imageType = mime_content_type($this->image['tmp_name']);
            if (str_starts_with($imageType, 'image/')) {
                $uploadDir = '../views/assets/img';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $imageName = uniqid() . '-' . basename($this->image['name']);
                $imagePath = $uploadDir . '/' . $imageName;
                
                if (move_uploaded_file($this->image['tmp_name'], $imagePath)) {
                    echo "Image uploadée avec succès : {$imagePath}<br>";
                } else {
                    throw new Exception("Échec de l'upload de l'image.");
                }
            } else {
                throw new Exception("Type d'image non valide.");
            }
        }

        // Gestion de l'upload du document
        if (isset($this->contenu_document) && $this->contenu_document['error'] === UPLOAD_ERR_OK) {
            $fileType = mime_content_type($this->contenu_document['tmp_name']);
            if ($fileType === 'application/pdf') {
                $uploadDir = './assets/documents';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $fileName = uniqid() . '-' . basename($this->contenu_document['name']);
                $documentPath = $uploadDir . '/' . $fileName;

                if (move_uploaded_file($this->contenu_document['tmp_name'], $documentPath)) {
                    echo "Document PDF uploadé avec succès : {$documentPath}<br>";
                } else {
                    throw new Exception("Échec de l'upload du document.");
                }
            } else {
                throw new Exception("Type de fichier non valide. Seuls les fichiers PDF sont autorisés.");
            }
        }

        // Vérification : au moins une image ou un document doit être fourni
        if (empty($imagePath) && empty($documentPath)) {
            throw new Exception("Aucun contenu valide fourni (image ou document).");
        }

        // Insérer les données dans la base de données
        $sql = "INSERT INTO cours (titre, description, Slgan, Type,Enseignant_id, contenu, image, categorie_id) 
                VALUES (:titre, :description, :Slgan, 'document', :idE,:contenu, :image, :categorie)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':titre', $this->titre, PDO::PARAM_STR);
        $stmt->bindParam(':description', $this->description, PDO::PARAM_STR);
        $stmt->bindParam(':Slgan', $this->slgan, PDO::PARAM_STR);
        $stmt->bindParam(':idE', $this->id, PDO::PARAM_INT);
        $stmt->bindParam(':contenu', $documentPath, PDO::PARAM_STR); // Chemin du document
        $stmt->bindParam(':image', $imagePath, PDO::PARAM_STR);  
        $stmt->bindParam(':categorie', $this->categorie_id, PDO::PARAM_INT);
        
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
        // Si aucun ID utilisateur n'est défini, retourner tous les cours
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
            $stmt->execute(); // Exécution de la requête
            $Cours = $stmt->fetchAll(PDO::FETCH_ASSOC);
           // Debugging the raw query result
            return $Cours;
        } else {
            // Si un ID utilisateur est défini, retourner uniquement les cours associés
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
                    WHERE U.id = :id AND C.type = 'document'
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

public function modiferCours($id){
    $sql = "SELECT * FROM cours where id = :id  and Type = 'document'";
    $stmt = $this->connect->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $resutl = $stmt->fetch(PDO::FETCH_ASSOC);
    return $resutl;

}


public function Modifier($id) {
    try {
        // Initialisation des chemins pour l'image et le document
        $imagePath = '';
        $documentPath = '';

        // Vérification et upload de l'image
        if (isset($this->image) && $this->image['error'] === UPLOAD_ERR_OK) {
            $imageType = mime_content_type($this->image['tmp_name']);
            if (str_starts_with($imageType, 'image/')) {
                $uploadDir = '../views/assets/img';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                $imageName = uniqid() . '-' . basename($this->image['name']);
                $imagePath = $uploadDir . '/' . $imageName;
                
                if (!move_uploaded_file($this->image['tmp_name'], $imagePath)) {
                    throw new Exception("Échec de l'upload de l'image.");
                }
            } else {
                throw new Exception("Type d'image non valide.");
            }
        }

        // Vérification et upload du document PDF
        if (isset($this->contenu_document) && $this->contenu_document['error'] === UPLOAD_ERR_OK) {
            $fileType = mime_content_type($this->contenu_document['tmp_name']);
            if ($fileType === 'application/pdf') {
                $uploadDir = '../views/assets/documents';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                $fileName = uniqid() . '-' . basename($this->contenu_document['name']);
                $documentPath = $uploadDir . '/' . $fileName;

                if (!move_uploaded_file($this->contenu_document['tmp_name'], $documentPath)) {
                    throw new Exception("Échec de l'upload du document.");
                }
            } else {
                throw new Exception("Type de fichier non valide. Seuls les fichiers PDF sont autorisés.");
            }
        }

        // Vérification : au moins une image ou un document doit être fourni
        if (empty($imagePath) && empty($documentPath)) {
            throw new Exception("Aucun contenu valide fourni (image ou document).");
        }

        // Mise à jour des informations du cours dans la base de données
        $sql = "UPDATE cours 
                SET titre = :titre, 
                    description = :description, 
                    Slgan = :slgan, 
                    Type = 'document', 
                    Enseignant_id = :idEnseignant, 
                    contenu = :contenuDocument, 
                    categorie_id = :idCategorie, 
                    image = :image
                WHERE id = :id";
        
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':titre', $this->titre, PDO::PARAM_STR);
        $stmt->bindParam(':description', $this->description, PDO::PARAM_STR);
        $stmt->bindParam(':slgan', $this->slgan, PDO::PARAM_STR);
        $stmt->bindParam(':idEnseignant', $this->id, PDO::PARAM_INT);
        $stmt->bindParam(':contenuDocument', $documentPath, PDO::PARAM_STR); // Chemin du document
        $stmt->bindParam(':image', $imagePath, PDO::PARAM_STR);  // Chemin de l'image
        $stmt->bindParam(':idCategorie', $this->categorie_id, PDO::PARAM_INT);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo 'Cours mis à jour avec succès.<br>';
        } else {
            throw new Exception('Échec de la mise à jour du cours.');
        }

        // Suppression des anciens tags associés au cours
        $deleteTagsSql = "DELETE FROM courstag WHERE idCours = :idCours";
        $deleteStmt = $this->connect->prepare($deleteTagsSql);
        $deleteStmt->bindParam(':idCours', $id, PDO::PARAM_INT);
        $deleteStmt->execute();

        // Ajout des nouveaux tags associés au cours
        if (is_array($this->Tags_id)) {
            $insertTagSql = "INSERT INTO courstag (idCours, idTag) VALUES (:idCours, :idTag)";
            $tagStmt = $this->connect->prepare($insertTagSql);

            foreach ($this->Tags_id as $tag) {
                $tagStmt->bindParam(':idCours', $id, PDO::PARAM_INT);
                $tagStmt->bindParam(':idTag', $tag, PDO::PARAM_INT);

                if (!$tagStmt->execute()) {
                    throw new Exception("Échec de l'association du tag {$tag} au cours {$id}.");
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


}