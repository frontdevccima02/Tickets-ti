<?php
require_once "./../php/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <script src="https://kit.fontawesome.com/fcdf70aeb7.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <form class="formulario" action="./registro.php" method="post">

        <h1>Registrate</h1>
        <div class="contenedor">


            <div class="input-contenedor" >
                <i class="fa-solid fa-user icon"></i>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
            </div>

            <div class="input-contenedor" >
                <i class="fa-solid fa-user icon"></i>
                <input type="text" id="usuario" name="usuario" placeholder="Usuario" required>
            </div>

            <div class="input-contenedor" >
                <i class="fa-solid fa-user icon"></i>
                <input type="text" id="telefono" name="telefono" placeholder="Telefono" required>
            </div>

            <div class="input-contenedor" >
                <i class="fa-solid fa-user icon"></i>
                <input type="text" id="correo" name="correo" placeholder="Correo" required>
            </div>
            <div class="input-contenedor" >
                <i class="fa-solid fa-user icon"></i>
                <select class="op" id="area" name="area">
                <?php $sel="SELECT * FROM area WHERE 1";
                                        $res=mysqli_query($conexion,$sel);
                                        while($mos=mysqli_fetch_row($res)){?>
                    <option value="<?php echo $mos[1]; ?>"> <?php echo $mos[1]; ?> </option>
                    <?php } ?> 
                </select>
                
            </div>


            <div class="input-contenedor" >
                <i class="fa-solid fa-key icon"></i>
                <input type="password" placeholder="Password" id="pass" name="password" required>
            </div>

            <input type="submit" value="Registrate" class="button">
            <p>Al registrarte aceptas nuestras condiciones de uso y politica de privacidad</p>
            <p>¿Ya tienes cuenta?<a href="../index.php">Iniciar sesion</a></p>
        </div>
    </form>
    <script src="./../js/validacion.js"></script>
</body>
</html>