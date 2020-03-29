<?php

   class Session{
       private $codSession = "pedidos";
 //constructor para inicializar el nombre de lasesion
       public function __construct()
       {
           session_name($this->codSession);
           session_start();
            
       }
       public function checkSession(){
           $check = false;

           if(
               isset($_SESSION['usuario'])&&
               !empty($_SESSION['usuario'])
           ){
               $check=true;
           }

           return $check;
       }
       public function createSession( array $datos){
           //inicializamos la sesion vaciando la variable session

           $_SESSION = array();

           $_SESSION['usuario'] = $datos['usuario'];
           $_SESSION['nombre'] = $datos['nombre'];

       }
       public function endSession(){
           $_SESSION= array();

           //para vaciar cookies de la sesion
           if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(),'',time() - 42000, $params["path"],$params["domain"],
            $params["secure"], $params["httponly"]);
           }
           session_destroy();

       }
   }




?>