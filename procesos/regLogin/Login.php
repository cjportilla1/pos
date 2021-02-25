<?php
session_start();

require('../../clases/Conexion.php');
require_once('../../clases/Usuarios.php');

$obj=new usuarios();


$datos=array(
    trim($_POST['usuario']),
    trim($_POST['password']),
   
);


echo $obj->loginUser($datos);






?>