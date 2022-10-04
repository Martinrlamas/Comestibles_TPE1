<?php

require_once './app/models/products.models.php';
require_once './app/views/products.view.php';
class ProductsController {

    private $model;
    private $view;

    public function __construct(){
       $this->model = new ProductsModel();
       $this->view = new ProductsView();
    }
    
    public function ShowProducts(){
        $products= $this->model->getAllProducts();
        $this->view->Showproducts($products);
    }
        
}