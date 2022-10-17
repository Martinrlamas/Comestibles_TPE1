<?php
    require_once './app/models/user.model.php';
    require_once './app/views/auth.view.php';

    class AuthController{
        
        private $view;
        private $model;

        public function __construct(){
            $this->view = new AuthView();
            $this->mdodel = new UserModel();
        }
        
        public function ShowFormLogin(){
            $this->view->ShowFormLogin();
        }

        public function ValidateUser(){
        // Tomamos los datos del form.

            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->model->getUserByEmail($email);
        //verifico que el usuario existe y que las contraseñas son iguales.

            if($user && password_verify($password, $user->password)){
                //inicio uan session para este usuario.
                session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

                header("Location: " . BASE_URL);
            }
            else{
                // Si los datos son incorrectos muestro el form con un error.
                $this->view->ShowFormLogin("El usuario o la contraseña no existe");
            }
        }
        public function Loguot(){
            session_start();
            session_destroy();
            header("Location: " .BASE_URL);
        }
        
    }