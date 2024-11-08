<?php
require_once File::build_path(array("Model", "Model.php"));

class AccueilModel extends Model {
    private $pdo;

    public function getPageData() {
        $pdo = parent::connectMySQL();

        $query = "SELECT * FROM page_accueil";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
