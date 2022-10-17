<?php
// traemos nuestro controlador para enrutarlo
require_once './app/controllers/products.controller.php';
require_once './app/controllers/AuthController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'products';
if(!empty($_GET['action'])){
    $action = $_GET['action'];
}
// parsea la accion Ej: dev/juan -->['dev', juan]
$params = explode('/', $action);


//tabla de ruteo
    switch ($params[0]){
        case 'login':
            $authController = new AuthController();
            $authController->ShowFormLogin();
            break;
        case 'validate':
            $authController = new AuthController();
            $authController->ValidateUser();
            break;
        case 'loguot':
            $authController = new AuthController();
            $authController->Loguot();
            break;
        case 'products':
            $productsController = new ProductsController();
            $productsController->Showproducts();
            break;
        
        case 'categories':
            $productsController = new ProductsController();
            $productsController->ShowCaterogies();
            
            break;
            
        case 'categorie':
            $productController = new ProductsController();
            $productsController->ShowCategorie();

            break;
                
        case 'productscategories':
            $productsController = new ProductsController();
            $productsController->ShowProductswhithcategorie();

            break;

        case 'addproduct':
            $productsController = new ProductsController();
            $productsController->AddProduct();

            break;

        case 'addcategorie':
            $productsController = new ProductsController();
            $productsController->AddCategorie();

            break;

            case 'deleteproduct':
            $productsController = new ProductsController();

              // Obtengo parametro de la accion.

            $id = $params[1];
            $productsController->DeleteProduct($id);

            break;

        case 'deletecategorie':
            $productsController = new ProductsController();

                // Obtengo parametro de la accion.

            $id = $params[1];
            $productsController->DeleteCategorie($id);

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

        case 'categoriedit':
            $productsController = new ProductsController();
            $id = $params[1];
            $productsController->ShowEditCategoriForm($id);

            break;
            
        case 'insertcategoriedit':
            $productsController = new ProductsController();
            $productsController->InsertCategoriEditByID();
            break;
        default:
            header('HTTP/1.0 404 Not Found');
            echo('<h1>404 page not found <h1>');
            break;
    }