
<?php
      
 if (!class_exists("funciones")) {
     include("funciones.php");
 }

 class Conexion{
     private $bd,$usuario,$clave,$servidor,$conexion,$puerto,$logs;

     public function __construct($logs){
         $this->bd = 'pedidos';
         $this->usuario = 'root';
         $this->clave = '';
         $this->servidor = 'localhost';
         $this->puerto = 3306;
         $this->logs = $logs;
     }

     public function parametros($bd, $usuario, $clave, $servidor, $puerto= 3306){
         $this->bd= $bd;
        $this->usuario =$usuario;
        $this->clave = $clave;
        $this->servidor = $servidor;
        $this->puerto = $puerto;
     }

     
     public function conect(){
         $mysqli= new Mysqli($this->servidor, $this->usuario, $this->clave, $this->bd, $this->puerto);

         if($mysqli->connect_error){
             Funciones::Logs("ConexionDB", $this->logs,"Error de Conexion: (".$mysqli->connect_errno.")".$mysqli->connect_error);
             die("Error de Conexion: ( " . $mysqli->connect_errno . " ) " . $mysqli->connect_error);
             $this->conexion= false;
             return false;

         }else{
             $this->conexion= $mysqli;
             $this->conexion->set_charset('utf8');
             return true;
         }

     }

     public function ejeConsulta($sql){
         $resultado = $this->conexion->query($sql);

         if($resultado){
             return $resultado;

         }else{
             Funciones::Logs("ConsultaDB",$this->logs,"Error en el query: (".$this->conexion->error.")".$sql);
             die("Error en el query: ( " . $this->conexion->error . " ) " . $sql); 
             return false;
         }

     }
     //creacion de destructor
     public function __destructor(){
         if($this->conexion){
             $this->conexion->close();

         }


     }
 }

 $conexion =  new Conexion('../logs/');
 $conexion->conect();

 $resultado = $conexion->ejeConsulta("SELECT * FROM usuarios");

  




?>