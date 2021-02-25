<?php


require('../../clases/Conexion.php');
require_once('../../clases/Usuarios.php');

$obj=new usuarios();





$datos=array(
    $_POST['usuario'],
    $_POST['password'],
   
   
);


echo $obj->registroUsuario($datos);






?>