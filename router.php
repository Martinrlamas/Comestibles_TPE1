<?php
// traemos nuestro controlador para enrutarlo
require_once './app/controllers/products.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';
if(!empty($_GET['action'])){
    $action = $_GET['action'];
}
// parsea la accion Ej: dev/juan -->['dev', juan]
$params = explode('/', $action);
// incluyo controlador de Productos y categorias.
$productsController = new ProductsController();

//tabla de ruteo
    switch ($params[0]){
        case 'home':
            $productsController->Showproducts();
            $productsController->ShowCaterogis();
            break;
        default:
            header('HTTP/1.0 404 Not Found');
            echo('<h1>404 page not found <h1>');
            break;
    }