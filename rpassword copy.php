<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>

    <script src="https://kit.fontawesome.com/fcdf70aeb7.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <form class="formulario" method="post" action="php/restorepass.php">
        <h1>Recuperar contraseña</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fa-solid fa-user icon"></i>
                <input type="text" id="usuario" name="usuario" placeholder="Nombre de usuario">
            </div>
            <div class="input-contenedor">
                <i class="fa-solid fa-key icon"></i>
                <input type="password" id="pass" name="password" placeholder="Contraseña nueva">
            </div>
            <div class="input-contenedor">
                <i class="fa-solid fa-key icon"></i>
                <input type="password" id="passn" name="passwordn" placeholder="Repite la contraseña">
            </div>
            <button class="button" type="sumbit">Enviar</button>
            <p>¿Ya tienes cuenta?<a href="index.php">Iniciar sesion</a></p>
        </div>
    </form>
</body>
</html>