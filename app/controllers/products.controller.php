<?php

require_once './app/models/products.models.php';
require_once './app/views/products.views.php';
Class ProductsControllers {
    private $model;
    private $view;
    public function __construct(){
       $products= $this->model->getAllProducts();
        $this->view->Showproducts($products);
    }
        
}