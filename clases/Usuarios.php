<?php

// require('Conexion.php');
class usuarios{

public function registroUsuario($datos){

    $c =new conectar();

    $conex=$c->conexion();
    $conex->set_charset("utf8");

    $fecha=date('Y-m-d');
    
    $sql="INSERT INTO usuarios (nombre,apellido,email,pass,fechaCaptura)
    values('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$fecha')
    ";
          

               $quer=$conex->query($sql) ;
      

               return $quer;
            // if ($quer->num_rows>0) {

            //     $res=$quer->fetch_row();
            //        echo $res[0];
                
            // //     # code...
            // }

         



}

public function loginUser($datos){

    $c =new conectar();

    $conex=$c->conexion();
    $conex->set_charset("utf8");

}

}

?>