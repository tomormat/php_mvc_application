<?php
// Include required files
require_once 'db_config.php';
require_once 'services/Database.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/AdvertisementController.php';

// Parse the URL to determine which controller and method to call
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';
$url = explode('/', $url);

$controllerName = ucfirst($url[0]) . 'Controller';
$methodName = isset($url[1]) ? $url[1] : 'index';

// Instantiate the appropriate controller and call the method
if (file_exists("controllers/$controllerName.php")) {
    $controller = new $controllerName();
    if (method_exists($controller, $methodName)) {
        $controller->$methodName();
    } else {
        echo "Method not found!";
    }
} else {
    echo "Controller not found!";
}
?>

