
<?php

 class RegCat{

public function registroCategoria($datos){

$c =new conectar();

$conex=$c->conexion();
$conex->set_charset("utf8");

$usuario=$datos[0];
$fecha=date('Y-m-d');

$sql="INSERT INTO categorias (id_usuario,nombreCategoria,fechaCaptura)
values('$usuario','$datos[1]','$fecha')
";
      

           $quer=$conex->query($sql) ;
  
        //    print_r($quer);
     
           return $quer;
        // if ($quer->num_rows>0) {

        //     $res=$quer->fetch_row();
        //        echo $res[0];
            
        // //     # code...
        // }

     
        }


}