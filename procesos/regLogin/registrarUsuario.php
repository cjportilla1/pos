<?php


require_once('../..clases/Conexion.php');
require_once('../..Usuarios.php');

$obj=new usuarios();



$pass=sha1($_POST['Password']);

$datos=array(
    $_POST['Nombre'],
    $_POST['Apellido'],
    $_POST['Usuario'],
    $pass
   

    
);

echo $obj->registroUsuario($datos);


?>