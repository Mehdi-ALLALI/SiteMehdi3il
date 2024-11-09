<?php

require_once File::build_path(array("Model", "Model.php"));


class ModelUser extends Model {

    static function connexion($admin, $password){
       
        
        $model = new Model();
        $pdo = $model->connectMySQL();        

        $requete = "SELECT COUNT(*) AS countUser FROM user WHERE admin = :admin and password = :password";

        try {
            $stmt = $pdo->prepare($requete);
            $stmt->bindParam(':admin', $admin);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            return $user['countUser'];

        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        return null;
    }


    static function deconnexion(){
        $_SESSION = []; 
        session_destroy(); 

        header('Location: ?controller=accueil&action=index'); 
    }
}


?>