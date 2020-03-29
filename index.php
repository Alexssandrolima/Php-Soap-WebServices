<?php  

include("util/system/functions.php");
include("util/system/session.php");
include("util/system/conexion.php");

$session= new Session();

 if($session->checkSession()){

 }else{include('inc/login.php');}


?>