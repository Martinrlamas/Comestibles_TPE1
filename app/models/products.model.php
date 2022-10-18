
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
            $query = $this->db->prepare("SELECT productos.*, categorias.categoria
                                         as categoria FROM productos JOIN categorias
                                         ON productos.id_categoria = categorias.id");
            $query->execute();

            //obtengo los resultados
            $products = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo con todos los productos.
            
            return $products;
        } 
        
        public function GET($id){
            $query = $this->db->prepare('SELECT productos.*, categorias.categoria
                                         FROM productos JOIN categorias
                                            ON productos.id_categoria = categorias.id 
                                         WHERE productos.id = ?');
            $query->execute([$id]);

            $product = $query->fetch(PDO::FETCH_OBJ);
            
            return $product;
        }

     //Inserta un producto en la base de datos.

    public function InsertProduct($product, $price, $categorie) {

        $query = $this->db->prepare("INSERT INTO productos (producto,
                                     precio, id_categoria) VALUES (?, ?, ?)");
        $query->execute([$product, $price, $categorie]);

    }


    public function DeleteProductByID($id){

        $query = $this->db->prepare('DELETE FROM productos WHERE id = ?');
        $query->execute([$id]);
    }


    public function ProductEditByID($id){

        //Llamamos todos los datos donde el ID sea el igual al solicitado.

        $query = $this->db->prepare("SELECT * FROM productos WHERE id = ?");
        $query->execute([$id]);

        //Almacenamos los datos extraidos en una variable (forma de arreglo).

        $producteditable = $query->fetch(PDO::FETCH_OBJ);
        return $producteditable;
    }


    public function InsertEditProductByID($producto,$precio,$categoria,$id){

    // Seteamos los campos a modificar y mediante su id modificamos los campos.

        $query = $this->db->prepare('UPDATE productos SET producto = ?,
                                    precio =?, id_categoria = ?
                                     WHERE id = ?');
        $query->execute([$producto, $precio, $categoria, $id]);
    }
} 