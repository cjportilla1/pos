function validarFormVacio(formulario){
    datos=$('#' + formulario).serialize();
    d=datos.split('&');
    vacios=0;
    for(i=0;i< d.length;i++){
            controles=d[i].split("=");
            if(controles[1]=="A" || controles[1]==""){
                vacios++;
            }
    }
    return vacios;
}

function confirmDelete(id){
    var r=confirm("¿Estas seguro de eliminar este registro?");
    if (r==true){
      window.location.href = "../vistas/categorias.php?eliminar&id="+id;
    }
  }