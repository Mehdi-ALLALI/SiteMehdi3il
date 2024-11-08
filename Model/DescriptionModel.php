<?php
require_once File::build_path(array("Model", "Model.php"));

class DescriptionModel extends Model{
    
    private $pdo;

    public function getPageData() {
        $pdo = parent::connectMySQL(); 
        $query = "SELECT * FROM page_description"; 
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }

    static function createImage($imageData) {
        $model = new Model();
        $pdo = $model->connectMySQL();

        $query = "INSERT INTO page_description (url, description) VALUES (:url, :description)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':url', $imageData['url']);
        $stmt->bindParam(':description', $imageData['description']);
        $stmt->execute();
    }

    static function updateImage($imageData) {
        $model = new Model();
        $pdo = $model->connectMySQL();

        $query = "UPDATE page_description SET url = :url, description = :description WHERE id = :id"; 
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':url', $imageData['url']);
        $stmt->bindParam(':description', $imageData['description']);
        $stmt->bindParam(':id', $imageData['id']);
        $stmt->execute();
    }

    static function deleteImage($id) {
        $model = new Model();
        $pdo = $model->connectMySQL();

        $query = "DELETE FROM page_description WHERE id = :id"; 
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}


?>