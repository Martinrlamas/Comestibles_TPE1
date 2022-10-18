<?php
class AuthHelper {

    // solo si esta logueado retorna verdadero. y habilita a las funciones de administrador.
   public function checkLoggedIn() {
        session_start();
    if (!isset($_SESSION['IS_LOGGED'])){

        return false;

    }else {
           return true;
    } 
    }
}

// public function checkLoggedIn() {
//     session_start();
//     if (!isset($_SESSION['IS_LOGGED'])) {
//         header("Location: " . BASE_URL . 'login');
//         die();
//     }
// } 
// }
