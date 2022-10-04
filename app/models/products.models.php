
<?php  
// Trae los productos desde la base de datos con un PDO.
    function getAllProducts($products){
        //Abrimos conexion con la base de datos
        $db = new PDO('mysql:host=localhost;'.'dbname=db_comestibles;charset=utf8', 'root', '');
        // Ejecutamos consulta SQL (prepara y execute).
        $query = $db->prepare('SELECT * FROM productos');
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);// devuelve un arreglo con todos los productos.
        return $products;
    } 