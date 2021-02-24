<?php

class conectar{

    public function conexion() {
        return new mysqli("localhost", "root", "yTUyC1WVQRSHq699", "ventas");
         
     
     }
    

}


 
//   if ($con->conectar()) {
//       echo "conexion exitosa";

//   }else {
//       echo "sin conexion";
//   }


?>