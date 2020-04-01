<?php

//Cifrado de contraseña en cifrado sha512 -128 caracteres-
//1er parametro el tipo de cifrado 2do parmetro la data a encriptar
 $clave_cifrada = hash("sha512", "m7x"."12345");

 echo $clave_cifrada;
?>