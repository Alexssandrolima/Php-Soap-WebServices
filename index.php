<?php  

include("util/system/functions.php");
include("util/system/session.php");
include("util/system/conexion.php");

$conexion = new Conexion('util/logs');
$conexion->conect();

$session = new Session();


//Obteniendo los parametros del sistema

$result_params = $conexion->ejeConsulta("SELECT * FROM parametros");

$params = array();

foreach($result_params as $fila){
    $params[trim($fila['parametro'])] = trim($fila['valor']);
}









//Si tenemos una sesion abierta,se incluyen los modulos del sistema
 if($session->checkSession()){
     echo "Se ha iniciado Sesion";

     #Validacion en tiempo de sesion
     if(isset($_SESSION['fechaSesion'])){
         $fechaGuardada = $_SESSION['fechaSesion'];
         $now = date('Y-m-d H:i:s');

         $tiempo_transcurrido = (strtotime($now)-strtotime($fechaGuardada));

         if($tiempo_transcurrido >= ($params['timeout'] * 60)){
             $session->endSession();
             header("Refresh:0");
             exit();
         }else{
             $_SESSION['fechaSesion'] = date('Y-m-d H:i:s');
         }

     }else{
         $_SESSION['fechaSesion'] = date('Y-m-d H:i:s');
     }
     

     #Si no existe sesion iniciada mosrtamos el login

 }else{include('inc/login.php');}


?>