<?php
require_once File::build_path(array("Model", "DescriptionModel.php"));

 class DescriptionController{

    
    static function descriptionRoute(){
        $pageDescriptionModel = new DescriptionModel(); 
        $pageData = $pageDescriptionModel->getPageData(); 

        $controller = 'description';
        $view = 'description';
        $pagetitle = 'Cristiano Ronaldo - Description';
        $description ='Page description de mon site';
        require File::build_path(array("View", "base.php"));
    }

    

}