<?php

require_once './app/models/products.model.php';
require_once './app/views/products.view.php';
require_once './app/models/categoris.model.php';
class ProductsController {

    private $modelProducts;
    private $modelCategoris;
    private $view;

    public function __construct(){
       $this->modelProducts = new ProductsModel();
       $this->modelCategoris = new CategorisModel();
       $this->view = new ProductsView();

    }
    
    public function ShowProducts(){
        $products= $this->modelProducts->getAll();
        $this->view->Showproducts($products);
    }
    public function ShowProductswhithcategori(){
        $categoriproducts = $this->modelProducts->getAllProductsWhithCategoris();
        $this->view->ShowProductswhithcategori($categoriproducts);
    }
    public function ShowCaterogis(){
        $categoris = $this->modelCategoris->getAll();
        $this->view->ShowCategoris($categoris);
    }
    //public function AddProduct(){
        // Validar Producto.

        // $product = $_POST['product'];
        // $price = $_POST['price'];
        // $categori = $_POST['categori'];
        // $id = $this->modelProducts->InsertProduct($product, $price, $categori);

        // header("Location: " . BASE_URL);
    //}
}