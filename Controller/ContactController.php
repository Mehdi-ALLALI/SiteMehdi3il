<?php
 class ContactController{

    static function contactRoute(){
        $controller = 'contact';
        $view = 'contact';
        $pagetitle = 'Cristiano Ronaldo - Contactez-nous';
        $description ='Page contact de mon site';
        $Css = ['contact'];
        require File::build_path(array("View", "base.php"));
    }

}