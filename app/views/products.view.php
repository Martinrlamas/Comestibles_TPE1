
<?php
    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
 class ProductsView{

    private $smarty;

    // inicializo Smarty    
    public function __construct() {
        $this->smarty = new Smarty(); 
    }

     function Showproducts($products){
         //var_dump($products);
         //asigno variables a smarty.
        $this->smarty->assign('products', $products);
        $this->smarty->display('products.tpl');
     }

     function ShowCategoris($categoris){
        //var_dump($categoris);
        $this->smarty->assign('categoris', $categoris);
        $this->smarty->display('categoris.tpl');
     }
 }