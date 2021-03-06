<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <script src="../vendor/jquery/jquery-3.2.1.min"></script>
  <meta name="author" content="">
  <script src="../js/funciones.js"></script>


  <title>Registro servitec</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block p-4 "><img src="../img/Lvertical.jpeg" alt="" width="100%" height="100%"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Crea tu cuenta!</h1>
              </div>
              <form class="user" id="frmRegistro">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="Nombre" id="exampleFirstName" placeholder="Nombre">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="Apellido" id="exampleLastName" placeholder="Apellido">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="Usuario" id="exampleInputEmail" placeholder="Usuario(email)">
                </div>
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="Password" id="exampleInputPassword" placeholder="Contraseña">
                  </div>

                </div>
             
                <a  id="registro" class="btn btn-primary btn-user btn-block">
                  Register Account
                </a>
                <hr>
                <a href="index.php" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-arrow-alt-circle-left fa-fw"></i> Regresar al login
                </a>

              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Olvidó su contraseña?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Ir a la pagina web</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#registro').click(function() {


       vacios= validarFormVacio('frmRegistro')

        if (vacios>0) {
          alert('debes llenar todos los campos');

          return false;
          
        }
     
      
        datos = $('#frmRegistro').serialize();
        $.ajax({
          type: "POST",
          data: datos,
          url: "../procesos/regLogin/registrarUsuario.php",
          success: function(r) {
          
      console.log(r);
// window.location.href='procesos/regLogin/registrarUsuario.php';
if (r==1) {
  alert('Exito al guardar el usuario!');
  
}else{
  alert('Error al guardar el usuario!');
}


          }
        });
      });

    });
  </script>
  <!-- Bootstrap core JavaScript-->
  <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>