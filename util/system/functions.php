<?php


//Clase utilizada parafunciones generales
class Funciones{

    //Creacion de metodo para guardar en archivo .txt cuallqier doc que utlizemos
    public static function Logs($nombre_file, $ubicacion, $description){

        $carpeta = $ubicacion.date('Y').'/'.date('m').'/'.date('d').'/';

        if(!file_exists($ubicacion . date('Y') . '/' . date('m') . '/' . date('d'))) {
            mkdir($ubicacion . date('Y') . '/' . date('m') . '/' . date('d'),0777,true);

        }
        $myFile = fopen($carpeta.$nombre_file.'.txt',"a") or die("Archivo Inexistente");
        fwrite($myFile, date("Y-m-d H:d:s").' >>> '.$description."/r/n");
        //Liberacion de memoria
        fclose($myFile); 



    }

}

//Ejcutamos la funcion
//Funciones::Logs("test","../logs/","Este es un msj de prueba");

?>