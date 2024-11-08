<?php

require_once File::build_path(array("Model", "UserModel.php"));

class UserController{
 

    static function userRoute(){
        
        $controller = 'user';
        $view = 'login';
        $pagetitle = 'Cristiano Ronaldo - Connexion';
        $description ='Page connexion de mon site';
        $Css = ['contact'];
        require File::build_path(array("View", "base.php"));
    }

    static function userConnexion(){
        $admin = $_POST['login'];
        $password = $_POST['password'];

        $user = ModelUser::connexion($admin, $password);
        
       
        if ($user != 0) {
            $controller = 'admin';
            $view = 'admin_page';
            $pagetitle = 'Cristiano Ronaldo - Administrateur';
            $description ='Page administration';
            require File::build_path(array("View", "base.php"));
            
            exit();
        } else {
            // Identifiant ou mot de passe incorrect
            echo "Identifiant ou mot de passe incorrect.";
        }
    
    
    }
    


}