<?php

// require('Conexion.php');
class usuarios{

public function registroUsuario($datos){

    $c =new conectar();

    $conex=$c->conexion();
    $conex->set_charset("utf8");

    $fecha=date('Y-m-d');
    
    $sql="INSERT INTO usuarios (nombre,apellido,email,password,fechaCaptura)
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

    $password=sha1($datos[1]);

    $_SESSION['usuario']=$datos[0];
   $_SESSION['iduser']=self::traeId($datos);

    $sql="select * from usuarios where email='$datos[0]' and password ='$password'";
      
    $quer=$conex->query($sql) ;
   
if ($quer->num_rows>0) {
    return 1;
    # code...
}else{
    return 0;
}



    // print_r($sql);
}

public function traeId($datos){
    $c =new conectar();
    $conex=$c->conexion();
    $conex->set_charset("utf8");
    $password=sha1($datos[1]);

    $sql="select id_usuario from usuarios where email='$datos[0]' and password ='$password'";

    $resu=$conex->query($sql);

        $result=$resu->fetch_row();

    return $result[0];


}

}

?>