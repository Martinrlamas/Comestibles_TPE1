
<?php 
class ProductsModel{

    private $db;

    public function __construct(){
        //Abrimos conexion con la base de datos
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_comestibles;charset=utf8', 'root', '');
    } 
    // Devuelve lista de producto completa.
       public function getAll(){

            // Ejecutamos consulta SQL (prepara y execute).
            $query = $this->db->prepare("SELECT * FROM productos");
            $query->execute();

            //obtengo los resultados
            $products = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo con todos los productos.
            
            return $products;
        } 
        // Toma todos los productos por su categoria correspondiente.
        public function getAllProductsWhithCategoris(){

            //Ejecutamos consulta SQL para productos con categoria (2 tablas).
            $query = $this->db->prepare("SELECT productos.*, categorias.categoria as categoria FROM productos JOIN categorias ON productos.id_categoria = categorias.id");
            $query->execute();

            $categoriproducts = $query->fetchAll(PDO::FETCH_OBJ);

            return $categoriproducts;
        }
         /**
     * Inserta un producto en la base de datos.
     */
    public function InsertProduct($product, $price, $categori) {
        $query = $this->db->prepare("INSERT INTO productos (nombre, precio, id_categoria) VALUES (?, ?, ?)");
        $query->execute([$product, $price, $categori]);

        return $this->db->lastInsertId();
    }

} 