<?php

require_once File::build_path(array("Model", "Model.php"));

class PageAccueilModel extends Model{
    
    static function getTexts() {
        $model = new Model();
        $pdo = $model->connectMySQL();

        $requete = "SELECT * FROM page_accueil"; 

        $stmt = $pdo->prepare($requete);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }

    static function updateTexts($texts) {
        $model = new Model();
        $pdo = $model->connectMySQL();

        $requete = "UPDATE page_accueil SET stats = :stats, citations = :citations, nouvelles = :nouvelles, saviez_vous = :saviez_vous WHERE id = 1"; 

        $stmt = $pdo->prepare($requete);
        $stmt->bindParam(':stats', $texts['stats']);
        $stmt->bindParam(':citations', $texts['citations']);
        $stmt->bindParam(':nouvelles', $texts['nouvelles']);
        $stmt->bindParam(':saviez_vous', $texts['saviez_vous']);
        $stmt->execute();
    }
}

?>