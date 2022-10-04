
<?php 
class ProductsModel{

    private $db;

    public function __construct(){
        //Abrimos conexion con la base de datos
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_comestibles;charset=utf8', 'root', '');
    } 
    // Devuelve lista de tareas completa.
       public function getAllProducts(){

            // Ejecutamos consulta SQL (prepara y execute).
            $query = $this->db->prepare("SELECT * FROM productos");
            $query->execute();

            //obtengo los resultados
            $products = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo con todos los productos.
            
            return $products;
        } 
} 