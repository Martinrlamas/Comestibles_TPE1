<?php

require_once './app/models/products.model.php';
require_once './app/views/products.view.php';
require_once './app/models/categoris.model.php';
require_once './app/helpers/auth.helper.php';
class ProductsController {

    private $modelProducts;
    private $modelCategories;
    private $view;
    private $helper;

    public function __construct(){

       $this->modelProducts = new ProductsModel();
       $this->modelCategories = new CategorisModel();
       $this->view = new ProductsView();
       $this->helper = new AuthHelper();

    }
    
    public function ShowProducts(){
        //Pasamos las categorias por parametro para el formulario

        $products= $this->modelProducts->getAll();
        $categories = $this->modelCategories->getAll();
        $this->view->Showproducts($products, $categories,$this->helper->checkLoggedIn());
    }

    public function ShowProduct($id){
       $product = $this->modelProducts->GET($id);
        $this->view->ShowProduct($product);
        
    }

    public function ShowCategorie($id){
        $categorie = $this->modelCategories->GET($id);
        $this->view->ShowCategorie($categorie);
    }

    public function ShowCaterogies(){
        $categories = $this->modelCategories->getAll();
        $this->view->ShowCategories($categories, $this->helper->checkLoggedIn());
    }

    public function AddProduct(){

        $admin = $this->helper->checkLoggedIn();
        if($admin){
            // Validar Producto.
    
             $product = $_POST['producto'];
             $price = $_POST['precio'];
             $categorie = $_POST['categoria'];
    
             $this->modelProducts->InsertProduct($product, $price, $categorie);
    
             header("Location: " . BASE_URL);
        } else{

            header("Location: " .BASE_URL. "login");
        }

    }
    public function DeleteProduct($id){

        $admin = $this->helper->checkLoggedIn();
        if($admin){
            $this->modelProducts->DeleteProductByID($id); 

                 header("Location: " . BASE_URL);
        }else{

            header("Location: " .BASE_URL. "login");
        }
    }
    // public function EditProductByID($id){
    //     if(!isset($_GET[$id])){
    //         //Mensaje no se encontro id... #code...
    //         header('Location:'. BASE_URL);
    //         die();
    //     }
    //     $this->modelProducts->ProductEditByID($id);
    // }
    public function ShowEditProductForm($id){

        $admin = $this->helper->checkLoggedIn();

        if($admin){

            $producteditable = $this->modelProducts->ProductEditByID($id);
            $categories = $this->modelCategories->getAll();
            $this->view->ShowEditProductForm($producteditable, $categories);

        } else{

            header("Location: " .BASE_URL. "login");

        }

    }

     public function InsertProductEditByID(){

        $admin = $this->helper->checkLoggedIn();
        if($admin){

       // if(!empty($_POST['producto']||$_POST['precio']
       //     ||$_POST['categoria']||$_POST['id_producto'])){
        // MENSAJE DE ERROR
            $producto = $_POST['producto'];
            $precio = (int)$_POST['precio'];
            $categoria = (int)$_POST['categoria'];
            $id = (int)$_POST['id'];
        //}
        $this->modelProducts->InsertEditProductByID($producto,$precio,$categoria,$id);

        header("Location: " . BASE_URL);
       }
       else{
        header("Location: " .BASE_URL. "login");
       }
    } 

    public function ShowEditCategoriForm($id){
         $admin = $this->helper->checkLoggedIn();
        if($admin){

           $categoriaeditable = $this->modelCategories->CategorieEditByID($id);
           $this->view->ShowEditCategorieForm($categoriaeditable);

        } else{

            header("Location: " .BASE_URL. "login");
        }
       

    }

    public function InsertCategoriEditByID(){
        // Determinar si no se envia una cadena vacia
            $categoria = $_POST['categoria'];
            $id = (int)$_POST['id'];

        $this->modelCategories->InsertEditCategorieByID($categoria,$id);

        header("Location: " .BASE_URL."categories");

    }

    public function AddCategorie(){

         $admin = $this->helper->checkLoggedIn();
        if($admin){

        $categorie = $_POST['categorie'];
        $this->modelCategories->InsertCategorieEditByID($categorie);

        header("Location: " .BASE_URL ."categories");
        } else {

            header("Location: " .BASE_URL. "login");
        }
    }

    public function DeleteCategorie($id){

        $admin = $this->helper->checkLoggedIn();
        if($admin){
        // Si la categoria contiene un arreglo devolver mensaje de no se puede borrar.

        $this->modelCategories->DeleteCategorieByID($id);
        
        header("Location: " .BASE_URL ."categories");

        } else{

             header("Location: " .BASE_URL. "login");
        }
    }
}