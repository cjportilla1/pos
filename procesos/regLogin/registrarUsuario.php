<?php


require('../../clases/Conexion.php');
require_once('../../clases/Usuarios.php');

$obj=new usuarios();



$pass=sha1($_POST['Password']);

$datos=array(
    trim($_POST['Nombre']),
    trim($_POST['Apellido']),
    trim($_POST['Usuario']),
    trim($pass)
   

    
);


echo $obj->registroUsuario($datos);






?>