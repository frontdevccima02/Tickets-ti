<?php
session_start();
require_once 'connect.php';
$usuario = $_SESSION['username'];

$id = $_POST['id'];
$reasignar = $_POST['reasignar'];
$estado = $_POST['estado'];



$insert = "UPDATE tickets SET agente='$reasignar',estado='$estado' WHERE id_ticket = '$id'";

$query = mysqli_query($conexion,$insert);




if ($query) {

echo '<script language="javascript">alert("Los datos han sido registrados con exito");</script>';
    
header('Location: http://localhost/proyecto/tickets/view/ConsultarTicket/');
} else {

    echo '<script language="javascript">alert("Error en el registro de datos");</script>';

}
?>