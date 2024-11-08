<?php
require_once File::build_path(array("Model", "PageAccueilModel.php"));

class PageAccueilController {

    static function gererPageAccueil() {
        $pageModel = new PageAccueilModel();
        $texts = $pageModel::getTexts(); 
        
        $controller = 'page_accueil';
        $view = 'page_accueil';
        $pagetitle = 'Cristiano Ronaldo - Edit Acceuil';
        $description ="Page d'edition de la page accueil";

        require File::build_path(array("View", "base.php"));
    }


    static function updateTexts() {
       
        if (isset($_POST['stats'], $_POST['citations'], $_POST['nouvelles'], $_POST['saviez_vous'])) {
            $texts = [
                'stats' => $_POST['stats'],
                'citations' => $_POST['citations'],
                'nouvelles' => $_POST['nouvelles'],
                'saviez_vous' => $_POST['saviez_vous'],
            ];
            PageAccueilModel::updateTexts($texts); 
            header('Location:?controller=pageAccueil&action=gererPageAccueil'); 
            exit();
        }
    }


}
?>
