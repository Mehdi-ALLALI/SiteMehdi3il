<?php
require_once File::build_path(array("Model", "AccueilModel.php"));

class AccueilController {


    public static function index() {
        $model = new AccueilModel();
        $pageData = $model->getPageData();
        $controller = 'accueil';
        $view = 'Accueil';
        $pagetitle = 'Cristiano Ronaldo - Description';
        $description ='Page administrateur de mon site';

        require File::build_path(array("View", "base.php"));
    }
}
?>
