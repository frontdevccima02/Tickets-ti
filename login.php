<?php
session_start();
$usuario = $_SESSION['username'];
require_once './php/connect.php';

$consul = "SELECT * FROM `usuarios` WHERE usuario = '$usuario'";
$query = mysqli_query($conexion,$consul);
$mostrar=mysqli_fetch_row($query);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CCIMAIT | HOME </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/fcdf70aeb7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/icons/logo-icon.ico">
</head>
<body>
  <header>
    <!-- navegacion -->
    <nav class="navbar navbar-expand-sm bg-pri navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand fs-3 text-white fw-bold" href="#">CCIMA IT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Servicios</a>
        </li>
        <li class="nav-item dropdown me-3">
            <!-- Boton de usuario -->
            <a class="nav-link fw-bold text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              <?php
              if(!isset($usuario)){
                header("location: login.php");
              }else{
                echo "$usuario";             
                echo "";
              }
            ?></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li><a class="dropdown-item" href='php/cerrar_sesion.php'>Salir</a></li>
            </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- fin de Navegacion -->
  </header>
  <!-- hero -->
  <section id="header" class="bg-pri">
    <div class="container">
      <div class="row justify-content-between align-content-center h100">
        <div class="col-12 col-md-5 text-white pt-5 pt-md-0">
          <!-- contenedor -->
          <h1 class="text-white fs-2">Resolvemos tus problemas de Informatica. </h1>
          <hr class="border border-white">
          <span class="fs-5"> Estas listo para Empezar</span>
          <div class="mt-5">
            <p class="fs-5 text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus necessitatibus
              omnis </p>
            <div class="d-flex flex-column">
              <div class="">
                <?php
                      $ruta1="./tickets/view/Home/index.php";
                  ?>
                <a class="btn btn-primary w250px bg-trasparent text-shadow mt-3 px-5 fw-bold"
                  href="<?php echo $ruta1; ?>">Nuevo Ticket</a>
              </div>
              <div class="mt-3">
                <?php
                if ($mostrar[6] == 'TI') {
                  $ruta = "./calendario/index.php";
                } else {
                  $ruta = "./calendariousu/index.php";
                }
              ?>
                <a class="btn btn-secondary w250px text-shadow text-black mt-3 px-5 fw-bold"
                  href="<?php echo $ruta; ?>">Mantenimiento</a>
              </div>
            </div>
          </div>
        </div>
        <!-- imagen -->
        <div class="col-12 col-md-5">
          <img class="w100 pt-5 pt-md-0" src="img/content/Image-Hero.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!--Fin Hero -->
  <!--Nosotros -->
  <section>
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-12 col-md-6">
          <h3 class="text-primary my-5">Provide Tools and Expertise to Effectively Manage Cloud Environments</h3>
        </div>
      </div>
      <div class="row my-5">
        <div class="col-12 col-md-6">
          <img class="w90" src="img/content/gestion.jpg" alt="">
        </div>
        <div class="col-12 col-md-6 border-ti d-flex flex-column justify-content-center">
          <p class="text-start ms-md-3 mt-3">Somos un area encargada de resolver los problemas relacionados con problemas
            informaticos, tales como
            conexiones LAN, configuracion de servidores, desarrollo de sorftware especializado, mantenimiento preventivo
            y correctivo a equipo de computo, mantenimeinto de actualizacion, instalacion de software</p>
        </div>
      </div>
    </div>
  </section>
  <!--Fin de Nosotros -->
  <!--Servicios -->
  <section id="servicios" class="bg-pri py-5">
    <div class="container ">
      <div class="row justify-content-center text-center">
        <div class="col-12 col-md-6">
          <h3 class="text-white my-5 ">Provide Tools and Expertise to Effectively Manage Cloud Environments</h3>
        </div>
      </div>
      <div class="row justify-content-evenly ">
        <div class="col-12 col-md-2 service">
          <img class="w100 px-5 pt-5" src="img/content/seguridad.png" alt="">
          <h3 class="text-white text-center my-3"> Soporte</h3>
        </div>
        <div class="col-12 col-md-2 service">
          <img class="w100 px-5 pt-5" src="img/content/servidor.png" alt="">
          <h3 class="text-white text-center my-3"> Desarollo</h3>
        </div>
        <div class="col-12 col-md-2 service">
          <img class="w100 px-5 pt-5" src="img/content/Velocidad.png" alt="">
          <h3 class="text-white text-center my-3">Infraestructura</h3>
        </div>
      </div>
    </div>
  </section>
  <!--Nosotros -->
  <section>
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-12 col-md-6">
          <h3 class="text-primary my-5">Provide Tools and Expertise to Effectively Manage Cloud Environments</h3>
        </div>
      </div>
      <div class="row my-5">
        <div class="col-12 col-md-6 order-md-2 border-ti text-end">
          <img class="w90" src="img/content/gestion.jpg" alt="">
        </div>
        <div class="col-12 col-md-6 order-md-1 d-flex flex-column justify-content-center">
          <p class="text-md-end  ms-md-3 px-md-3 mt-3">Somos un area encargada de resolver los problemas relacionados con problemas
            informaticos, tales como
            conexiones LAN, configuracion de servidores, desarrollo de sorftware especializado, mantenimiento preventivo
            y correctivo a equipo de computo, mantenimeinto de actualizacion, instalacion de software</p>
        </div>

      </div>
    </div>
  </section>
  <!--Fin de Nosotros -->
  <!-- footer -->
  <footer class="bg-pri">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-6 my-3">
          <h6 class="text-white text-uppercase text-center">todos los derechos reservados <a
              class="text-decoration-none text-white" target="_blank" href="https://grupoccima.com"> grupoccima.com</a>
            </H3>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
  </script>
</body>

</html>