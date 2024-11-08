<?php
session_name('Admin'); 
session_start();

require_once File::build_path(array("Controller", "DescriptionController.php"));
require_once File::build_path(array("Controller", "ContactController.php"));
require_once File::build_path(array("Controller", "UserController.php"));
require_once File::build_path(array("Controller", "AdminController.php"));
require_once File::build_path(array("Controller", "AccueilController.php"));
require_once File::build_path(array("Controller", "PageAccueilController.php"));
require_once File::build_path(array("Controller", "AdminDescriptionController.php"));


if (!isset($_GET['action'])) {
    AccueilController::index();
} else {
        $action = $_GET['action'];
    if (!isset($_GET['controller'])) {
        $controller = 'accueil';
    } else {
        $controller = $_GET['controller'];
    }

    $controller_class = ucfirst($controller) . 'Controller';

    if (class_exists($controller_class)) {
        $allMethodsController = get_class_methods($controller_class);
        if (in_array($action, $allMethodsController)) {
            $controller_class::$action();
        } else {
           // ControllerError::errorPageNonExistRoute();
        } 
    } else {
       // ControllerError::errorPageNonExistRoute();
    }
}
?>