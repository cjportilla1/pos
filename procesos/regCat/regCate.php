<?php

session_start();

require('../../clases/Conexion.php');
require_once('../../clases/RegCat.php');

$obj=new RegCat();


$datos=array(

    trim($_SESSION['iduser']),
    trim($_POST['NombreCt']),
   

);


echo $obj->registroCategoria($datos);