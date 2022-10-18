
<?php
    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
 class ProductsView{

    private $smarty;

    // inicializo Smarty    
    public function __construct() {
        $this->smarty = new Smarty(); 
    }

     function Showproducts($products, $categories, $admin){
      
         //asigno variables a smarty.

        $this->smarty->assign('products', $products);
        $this->smarty->assign('admin', $admin);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('products.tpl');

     }

     function ShowCategories($categories, $admin){

        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('admin', $admin);
        $this->smarty->display('categories.tpl');
     }

     function ShowProductswhithcategorie($categorieproducts){

        $this->smarty->assign('categorieproducts', $categorieproducts);
        $this->smarty->display('productswhithcategoris.tpl');
     }

      function ShowEditProductForm($producteditable, $categories){

         //traemos el producto con todos sus datos y los datos de categoria para modificarlos
        
         $this->smarty->assign('product', $producteditable);
         $this->smarty->assign('categories', $categories);
         $this->smarty->display('product.edit.tpl');
      }

      function ShowEditCategorieForm($categoriaeditable){

         $this->smarty->assign('categorie', $categoriaeditable);
         $this->smarty->display('categorie.edit.tpl');
      }

      public function ShowProduct($product){
         $this->smarty->assign('product', $product);
         $this->smarty->display('product.tpl');
      }
 }