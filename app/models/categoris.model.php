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

    }