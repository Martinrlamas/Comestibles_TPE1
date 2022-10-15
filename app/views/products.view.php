
<?php
    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
 class ProductsView{

    private $smarty;

    // inicializo Smarty    
    public function __construct() {
        $this->smarty = new Smarty(); 
    }

     function Showproducts($products, $categoris){
      
         //asigno variables a smarty.

        $this->smarty->assign('products', $products);
        $this->smarty->assign('categoris', $categoris);
        $this->smarty->display('products.tpl');

     }

     function ShowCategoris($categoris){

        $this->smarty->assign('categoris', $categoris);
        $this->smarty->display('categoris.tpl');
     }
     function ShowProductswhithcategori($categoriproducts){

        $this->smarty->assign('categoriproducts', $categoriproducts);
        $this->smarty->display('productswhithcategoris.tpl');
     }
 }