<?PHP
//App start
require_once 'controllers/main.php';
$controller = (new controllers());
$app = $controller->getViewsController();
include $app;
?>