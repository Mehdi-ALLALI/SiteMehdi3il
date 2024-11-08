<?php
require_once File::build_path(array("Model", "DescriptionModel.php"));

class AdminDescriptionController {

    static function adminRoute() {
        $pageDescriptionModel = new DescriptionModel(); 
        $pageData = $pageDescriptionModel->getPageData(); 

        $controller = 'admin_description';
        $view = 'admin_description';
        $pagetitle = 'Administrer la Page Description';
        $description ='Page d\'administration des images de la page description';
        require File::build_path(array("View", "base.php"));
    }

    static function createImage() {
        // Logique pour créer une nouvelle image
        if (isset($_FILES['image'], $_POST['description'])) {
            $description = $_POST['description']; // Si vous avez besoin de cette description
            $targetDir = "assets/images/"; // Dossier où les images seront stockées
            $fileName = basename($_FILES['image']['name']);
            $targetFilePath = $targetDir . $fileName;
    
            // Vérifier si le fichier est une image
            $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif']; // Types de fichiers autorisés
    
            if (in_array($imageFileType, $allowedTypes)) {
                // Vérifier si le dossier existe
                if (!file_exists($targetDir)) {
                    mkdir($targetDir, 0755, true); // Créer le dossier si nécessaire
                }
    
                // Déplacer le fichier téléchargé
                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
                    // Stocker l'URL de l'image et la description "nouvelle_image" dans la base de données
                    $imageData = [
                        'url' => $targetFilePath,
                        'description' => 'nouvelle_image' // Ici, nous définissons la description
                    ];
                    DescriptionModel::createImage($imageData); // Enregistrement dans la base de données
    
                    // Rediriger vers la page description pour afficher le nouvel ajout
                    header('Location:?controller=description&action=descriptionRoute');
                    exit();
                } else {
                    echo "Erreur lors du déplacement du fichier.";
                }
            } else {
                echo "Désolé, le fichier n'est pas une image valide.";
            }
        }
    }
    
    

    static function updateImage() {
        // Logique pour mettre à jour une image
        if (isset($_POST['id'], $_POST['url'], $_POST['description'])) {
            $imageData = [
                'id' => $_POST['id'],
                'url' => $_POST['url'],
                'description' => $_POST['description']
            ];
            DescriptionModel::updateImage($imageData); 
            header('Location:?controller=adminDescription&action=adminRoute'); 
            exit();
        }
    }

    static function deleteImage() {
        // Logique pour supprimer une image
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            DescriptionModel::deleteImage($id); 
            header('Location:?controller=adminDescription&action=adminRoute'); 
            exit();
        }
    }
}
?>
