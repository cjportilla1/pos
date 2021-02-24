<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <script src="js/funciones.js"></script>

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block p-4"><img src="img/Lvertical.jpeg" alt="" width="100%" height="100%"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                  </div>
                  <form class="user" id="frmLogin">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="usuario" id="usuario" aria-describedby="emailHelp" placeholder="Direccion de email...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recuerdame</label>
                      </div>
                    </div>
                    <a id="ingresarSistema" class="btn btn-primary btn-user btn-block">
                      Iniciar sesion
                    </a>
                 
                   
         
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Olvidaste tu contraseña?</a>
                  </div>
                  <hr>
                  <div class="text-center">
             
                    <a class="btn btn-danger btn-user btn-block" href="register.php">Crea tu cuenta!</a>
               
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>


<script type="text/javascript">
	$('#ingresarSistema').click(function(){

    vacios= validarFormVacio('frmLogin')

if (vacios>0) {
  alert('debes llenar todos los campos');

  return false;
  
}


datos=$('#frmLogin').serialize();
$.ajax({
  type:"POST",
  data:datos,
  url:"procesos/regLogin/Login.php",
  success:function(r){

    if (r==1) {
      window.location="main.php";
    }else{
      alert('Datos erroneos o error al acceder!');
    }

  }
});
});

</script>