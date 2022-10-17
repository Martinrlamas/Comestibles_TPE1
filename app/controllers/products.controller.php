<?php

require_once './app/models/products.model.php';
require_once './app/views/products.view.php';
require_once './app/models/categoris.model.php';
class ProductsController {

    private $modelProducts;
    private $modelCategories;
    private $view;

    public function __construct(){

       $this->modelProducts = new ProductsModel();
       $this->modelCategories = new CategorisModel();
       $this->view = new ProductsView();

    }
    
    public function ShowProducts(){

        //Pasamos las categorias por parametro para el formulario

        $products= $this->modelProducts->getAll();
        $categories = $this->modelCategories->getAll();
        $this->view->Showproducts($products, $categories);
    }

    public function ShowProductswhithcategorie(){

        $categorieproducts = $this->modelProducts->getAllProductsWhithCategories();
        $this->view->ShowProductswhithcategorie($categorieproducts);
    }

    public function ShowCaterogies(){

        $categories = $this->modelCategories->getAll();
        $this->view->ShowCategories($categories);
    }

    public function AddProduct(){
        // Validar Producto.

         $product = $_POST['producto'];
         $price = $_POST['precio'];
         $categorie = $_POST['categoria'];

        $id = $this->modelProducts->InsertProduct($product, $price, $categorie);

         header("Location: " . BASE_URL);
    }
    public function DeleteProduct($id){
        $this->modelProducts->DeleteProductByID($id);
        
        header("Location: " . BASE_URL);
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
        $producteditable = $this->modelProducts->ProductEditByID($id);
        $categories = $this->modelCategories->getAll();
        $this->view->ShowEditProductForm($producteditable, $categories);
    }

     public function InsertProductEditByID(){
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

    public function ShowEditCategoriForm($id){

        $categoriaeditable = $this->modelCategories->CategorieEditByID($id);
        $this->view->ShowEditCategorieForm($categoriaeditable);
    }

    public function InsertCategoriEditByID(){
        // Determinar si no se envia una cadena vacia
            $categoria = $_POST['categoria'];
            $id = (int)$_POST['id'];

        $this->modelCategories->InsertEditCategorieByID($categoria,$id);

        header("Location: " .BASE_URL."categories");

    }

    public function AddCategorie(){

        $categorie = $_POST['categorie'];
        $this->modelCategories->InsertCategorieEditByID($categorie);

        header("Location: " .BASE_URL ."categories");
    }

    public function DeleteCategorie($id){
        // Si la categoria contiene un arreglo devolver mensaje de no se puede borrar.

        $this->modelCategories->DeleteCategorieByID($id);
        
        header("Location: " .BASE_URL ."categories");
    }
}