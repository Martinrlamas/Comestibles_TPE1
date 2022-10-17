<?php
// traemos nuestro controlador para enrutarlo
require_once './app/controllers/products.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'products';
if(!empty($_GET['action'])){
    $action = $_GET['action'];
}
// parsea la accion Ej: dev/juan -->['dev', juan]
$params = explode('/', $action);


//tabla de ruteo
    switch ($params[0]){
        case 'products':
            $productsController = new ProductsController();
            $productsController->Showproducts();
            break;

            case 'categoris':
                $productsController = new ProductsController();
                 $productsController->ShowCaterogis();
                break;

            case 'productscategoris':
                $productsController = new ProductsController();
                $productsController->ShowProductswhithcategori();
                break;

             case 'add':
                 $productsController = new ProductsController();
                 $productsController->AddProduct();
                 break;

             case 'delete':
                $productsController = new ProductsController();
            // Obtengo parametro de la accion.
                $id = $params[1];
                $productsController->DeleteProduct($id);
                break;
            case 'productedit':
                $productsController = new ProductsController();
                $id = $params[1];
                $productsController->ShowEditProductForm($id);
                break;
            case 'insertproductedit':
                $productsController = new ProductsController();
                $productsController->InsertProductEditByID();
                break;
        default:
            header('HTTP/1.0 404 Not Found');
            echo('<h1>404 page not found <h1>');
            break;
    }