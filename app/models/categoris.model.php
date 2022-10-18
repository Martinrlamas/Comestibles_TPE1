<?php
    class CategorisModel{
    
            private $db;

        public function __construct(){
             //Abrimos conexion con la base de datos
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_comestibles;charset=utf8', 'root', '');
        }

        // Devuelve lista de cartegorias completa.
        public function getAll(){
    
            // Ejecutamos consulta SQL (prepara y execute).
            $query = $this->db->prepare("SELECT * FROM categorias");
            $query->execute();
    
            //obtengo los resultados
            $categoris = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo con todos los productos.
            
            return $categoris;
        }  

        public function GET($id){
            $query = $this->db->prepare('SELECT productos.*, categorias.categoria
                                        as categoria FROM productos JOIN categorias ON 
                                        productos.id_categoria = categorias.id
                                        WHERE id_categoria = ?');
        $query->execute([$id]);

        $products = $query->fetchAll(PDO::FETCH_OBJ);

        return $products;
        }

        public function InsertCategorieEditByID($categorie){
            $query=$this->db->prepare("INSERT INTO categorias (categoria) VALUES (?)");
            $query->execute([$categorie]);

        }

        public function DeleteCategorieByID($id){

            $query = $this->db->prepare('DELETE FROM categorias WHERE id = ?');
            $query->execute([$id]);
        }
        public function CategorieEditByID($id){
        //Llamamos todos los datos donde el ID sea el igual al solicitado.

        $query = $this->db->prepare("SELECT * FROM categorias WHERE id = ?");
        $query->execute([$id]);

        //Almacenamos los datos extraidos en una variable (forma de arreglo).

        $categoriaeditable = $query->fetch(PDO::FETCH_OBJ);

        return $categoriaeditable;
        }

       public function InsertEditCategorieByID($categoria,$id){

            // Seteamos los campos a modificar y mediante su id modificamos los campos.
        
            $query = $this->db->prepare('UPDATE categorias SET categoria = ?
                                            WHERE id = ?');
            $query->execute([$categoria, $id]);

    }
}