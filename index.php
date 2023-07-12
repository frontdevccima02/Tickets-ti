<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCIMAIT | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fcdf70aeb7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/icons/logo-icon.ico">
</head>

<body class="bg-img">
    <div class="container">
        <div class="row justify-content-center justify-content-md-between align-content-center h100">
            <!-- logo -texto -->
            <div class="col-12 col-md-4 text-white d-none d-md-block">
                <h1 class="text-white text-shadow-logo">CCIMA IT</h1>
                <hr class="border border-white">
                <span class="fs-5"> Estas listo para Empezar</span>
                <div class="mt-5">
                    <p class="fs-5 text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
                        necessitatibus omnis </p>
                    <a class="btn btn-primary bg-trasparent text-shadow mt-3 px-5 fw-bold" href="">Soporte Tecnico</a>
                </div>
            </div>
            <!-- Formulario-->
            <div class="col-11 col-md-4 bg-gassdoor m-1">
                <div class="mt-3">
                    <h3 class="text-white text-uppercase text-center pb-3">Login</h3>
                    <form  method="post" action="./php/iniciar_sesion.php" class="m-3">
                        <div class="mb-3 mt-3">
                            <label for="usuario" class="text-white form-label">Usuario:</label>
                            <input class="form-control" type="text" id="usuario" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="text-white form-label">Contraseña:</label>
                            <input class="form-control" type="password" id="pass" name="password" placeholder="Password">
                        </div>
                        <div class="form-check mb-3 text-white">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Recordar mi Cuenta
                            </label>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <button type="submit" class="btn btn-primary bg-pri px-5">Login</button>
                        </div>
                        <div class="d-flex justify-content-between pt-5">
                            <!-- Redireccionamiento -->
                            <a href="./php/registrou.php" class="text-white text-decoration-none">Registrar </a>
                            <a href="./rpassword.php" class="text-white text-decoration-none">Recuperar Contraseña</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- <div class="footer" > 
            <span class="text-white text-uppercase">todos los derechos reservados <a class="text-white text-decoration-none" href="https://grupoccima.com" target="_blanck">Grupoccima.com</a></span>
        </div> -->
    </div>
    <script src="./js/main.js"></script>
</body>

</html>
