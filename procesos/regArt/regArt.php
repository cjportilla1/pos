<?php

session_start();

require('../../clases/Conexion.php');
require_once('../../clases/regArti.php');

$obj=new RegArt();


$datos=array(

    trim($_SESSION['iduser']),
    trim($_POST['NombreCt']),
   

);


echo $obj->registroArticulo($datos);