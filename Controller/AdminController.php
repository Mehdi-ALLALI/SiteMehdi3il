<?php
 class AdminController{

    static function adminRoute(){
        $controller = 'admin';
        $view = 'admin_page';
        $pagetitle = 'Cristiano Ronaldo - Description';
        $description ='Page administrateur de mon site';
        require File::build_path(array("View", "base.php"));
    }

}