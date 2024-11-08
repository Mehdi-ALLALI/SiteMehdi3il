<?php

require_once File::build_path(array("Model", "Model.php"));


class ModelUser extends Model {

    static function connexion($admin, $password){
       
        
        $model = new Model();
        $pdo = $model->connectMySQL();        

        // Préparer la requête pour éviter les injections SQL
        $requete = "SELECT COUNT(*) AS countUser FROM user WHERE admin = :admin and password = :password";

        try {
            // Exécuter la requête
            $stmt = $pdo->prepare($requete);
            $stmt->bindParam(':admin', $admin);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            // Récupérer l'utilisateur
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            return $user['countUser'];

            // Vérifier si l'utilisateur existe
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        return null;
    }


    static function deconnexion(){
        $_SESSION = []; // Vide la session
        session_destroy(); // Détruit la session

        // Redirige vers la page d'accueil
        header('Location: ?controller=accueil&action=index'); 
    }
}


?>