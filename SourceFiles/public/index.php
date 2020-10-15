<?php

session_start();

define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('VIEW_PATH', ROOT_PATH . 'view' . DIRECTORY_SEPARATOR);

require_once ROOT_PATH . 'src/Controller.php';
require_once ROOT_PATH . 'src/Template.php';
require_once ROOT_PATH . 'src/Model.php';
require_once ROOT_PATH . 'src/DatabaseConnection.php';

require_once ROOT_PATH . 'model/Category.php';
require_once ROOT_PATH . 'model/Forum.php';

DatabaseConnection::connect('localhost', 'forum', 'root', '');


$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action = $_GET['action'] ?? $_POST['action'] ?? 'default';

switch($section) {
    default:
        include ROOT_PATH . 'controller/HomeController.php';
        $homeController = new HomeController();
        $homeController->runAction($action);
    break;
}

