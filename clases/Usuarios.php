

<?php

class usuarios{

public function registroUsuario($datos){

    $c =new conexion();

    $conexion=$c->conectar();

    $fecha=date(Y-m-d);
    
    $sql="(nombre,
    apellido,
    email,
    password,
    fechaCaptura)
    values('$datos[0]','','','')
    ";


}

}

?>