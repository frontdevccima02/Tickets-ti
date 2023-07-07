<?php

require 'connect.php';

session_start();

$usuario = $_POST['usuario'];
$pass = $_POST['password'];
$passn = $_POST['passwordn'];


$q = "SELECT COUNT(*) as contar FROM usuarios WHERE usuario = '$usuario' ";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);



if($array['contar']>0){

    if($pass == $passn){
        $insert = "UPDATE usuarios SET `password`='$pass' WHERE `nombre` = '$usuario'";
        $result = mysqli_query($conexion, $insert);
        if (!$result){
            echo 'Error al registrarse';
        } else {
            echo '<script>
            alert("se realizo el cambio"); window.history.go(-2);
        </script>';

        }
    }
    else{
    echo '<script>
    alert("las contraseñas no coinciden"); window.history.go(-1);
</script>';
    }
}else{
    echo '<script>
    alert("el usuario no existe"); window.history.go(-1);
</script>';
}
?>