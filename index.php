<?php
define('APP_PATH', __DIR__);

require_once APP_PATH . '/controllers/FashionCrystalController.php';

$controller = new FashionCrystalController();
$action = $_GET['action'] ?? 'list';

if (method_exists($controller, $action)) {
    $controller->$action(); // chama create(), edit(), delete() ou list()
} else {
    echo "Ação inválida.";
}
