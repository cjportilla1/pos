<?php

class conexion{

    public function conectar() {
        return new mysqli("localhost", "root", "yTUyC1WVQRSHq699", "ventas");
         
     }
    

}

 $con= new conexion();
 
  if ($con->conectar()) {
      echo "conexion exitosa";

  }else {
      echo "sin conexion";
  }


?>