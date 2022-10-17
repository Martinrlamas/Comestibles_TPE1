<?php
    class AuthView{
        
        private $smarty;
    
        public function __construct(){
            $this->smarty = new Smarty();
        }

        function ShowFormLogin($error = null){
            $this->smarty->assign('error',$error);
            $this->smarty->display('formLogin.tpl');
        }
    }