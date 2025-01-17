<?php 

require_once __DIR__."/../config/database.php";
class Tags{
    private $connect;
    private $name;
    public function __construct()
    {
        $this->connect = Database::getInstance()->getConnection();
    }

        public function getName(){
        return $this->name;
    }


    public function setName($name){
        $this->name = $name;
    }

    

    public function getTags(){
        $sql = "SELECT * FROM Tag";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();

        $tag = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $tag;
    }
    public function DeleteTage($id){
        $sql = "DELETE FROM tag WHERE id = :id";

        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        header("Location: ../admin/instructor-my-quiz-attempts copy.PHP");
        exit;
    }
    
    public function AjouterTage($idCont, $postdata){
        $sql = "INSERT INTO tag(nom , color) VALUES (:nameS,:color)";

        for ($i = 0; $i <= $idCont; $i++) {
            $name = trim($postdata["tag_name_$i"]);
            $color = $postdata["tag_color_$i"];
            $this->setName($name);
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(':nameS', $this->name, PDO::PARAM_STR);
            $stmt->bindParam(':color', $color, PDO::PARAM_STR);
            $stmt->execute();
        
        }
        header("Location: ../views/tagAdmiun.php");
        exit;
     }

     public function ModiferTage($id){
        $sql = "SELECT * FROM tag WHERE id = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id',$id);
         $stmt->execute();
         $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function Modifer($id, $name,$color) {
        $sql = "UPDATE tag SET nom = :name , color = :color WHERE id = :id";
    
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);  // Assuming id is an integer
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':color', $color, PDO::PARAM_STR);
    
        $stmt->execute();
        header("Location: ../admin/instructor-my-quiz-attempts copy.PHP");
        exit;
    }

    public static function getTagsByCours($id){
        $connect =  Database::getInstance()->getConnection();
        $sql = "SELECT * FROM tag as T
        join courstag as CT on CT.idTag = T.id_Tag  
        where idCours = :id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchObject();
        return $result;
    }
    
}

