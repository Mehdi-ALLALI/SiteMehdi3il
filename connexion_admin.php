<?php 
require_once 'connexion.php'; // Inclut le fichier de connexion à la base de données

session_start(); // Démarre la session

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];
    var_dump($login);
    die();

    // Préparer la requête pour éviter les injections SQL
    $requete = "SELECT * FROM user WHERE login = :login";

    try {
        // Exécuter la requête
        $stmt = $pdo->prepare($requete);
        $stmt->bindParam(':login', $login);
        $stmt->execute();

        // Récupérer l'utilisateur
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifier si l'utilisateur existe
        if ($user && isset($password, $user['password'])) {
            // Connexion réussie
            $_SESSION['user_logged_in'] = true;
            $_SESSION['user_name'] = $user['nom']; // Optionnel : stocke le nom de l'utilisateur
            header('Location: admin_page.php'); // Redirige vers le tableau de bord
            exit();
        } else {
            // Identifiant ou mot de passe incorrect
            echo "Identifiant ou mot de passe incorrect.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
